# Generate and use SSl For local dev environment in windows

#### Use mkcert to generate ssl certificate

[Download mkCert](https://github.com/FiloSottile/mkcert)

#### To install in windows we need Chocolatey to be install in our windows

If you haven't already. Install chocolatey ( https://chocolatey.org/install ).
Chocolatey is a package manager for windows which makes it super simple to install
applications. The name is inspired from NuGet. i.e. Chocolatey Nuget

#### Install mkcert, to do this from a admin command window run

🐱‍🏍 `choco install mkcert`

#### Create a local certificate authority (ca)

🐱‍🏍 `mkcert -install`

#### Open cmd in project folder and run the commad to generate certificates

🐱‍🏍 mkcert example.com "\*.example.com" example.test localhost 127.0.0.1 ::1

##### More advanced integration for IIS can be found in the below link

[https://technixleo.com/create-locally-trusted-ssl-certificates-with-mkcert-on-windows/]
