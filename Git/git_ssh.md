[Source](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/about-ssh)


## Generating a new SSH key 

1.	Open Git Bash.

2.	```ssh-keygen -t ed25519 -C "your_email@example.com"```
	or
	`ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`

	this command will generate new ssh key (public/private) @ C:\Users\Dev Skill\.ssh 

3.	


## Adding a new SSH key to your GitHub account

1.	Copy the SSH public key to your clipboard.

2.	If your SSH public key file has a different name than the example code, 
	modify the filename to match your current setup. When copying your key, 
	don't add any newlines or whitespace.

	`clip < ~/.ssh/id_rsa.pub`

3.	Add the SSH key to your account on GitHub


## Adding your SSH key to the ssh-agent

1.	run ssh agent int the background
	`eval "$(ssh-agent -s)"`
	
2.	Add your SSH private key to the ssh-agent. If you created your key with a different name, or 
	if you are adding an existing key that has a different name, replace id_ed25519 in the command 
	with the name of your private key file.
	
	`ssh-add ~/.ssh/id_rsa`