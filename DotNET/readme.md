# DotNET development with vscode

[Reference 1 (click to see)](https://learn.microsoft.com/en-us/dotnet/core/tools/dotnet-sln)

[Reference 2 (click to see)](https://learn.microsoft.com/en-us/dotnet/core/tools/dotnet-add-package)

### 🚀 To see the list of available commands
```
dotnet new list
```

### 🚀 To create a new solution
```
dotnet new sln --name <SolutionName>
```

### 🚀 To create a new Project (mvc, console, webapi, class library etc)
```
dotnet new console --name <ProjectName>
dotnet new mvc --name <ProjectName>
dotnet new webapi --name <ProjectName>
dotnet new classlib -name <ClassLibraryName>
```

### 🚀 Attach all projects into Project Solution
```
dotnet sln <SolutionName.sln> add <ProjectPath/ProjectName.csproj>
```

### 🚀 To add all project into solution recursively (windows Powershell only)
```
dotnet sln add (ls -r **/*.csproj)
```

### 🚀 Add reference to project
```
dotnet add <ProjectPath/PName.csproj> reference <ReferenceProjectPath/PName.csproj>

dotnet add TestProj/TestProj.csproj reference HelperLib/HelperLib.csproj
```

### 🚀 Add Nuget package to project
1. Go to the project directory
2. Type the command
```
dotnet add package <NugetPackageName>
```

### 🚀 Generate Build and Debug assest to run dotnet project in VS Code

1. Press `ctrl + shift + p`

2. Now Choose `.Net: Generate Assets for Build & Debug`

3. After generating the config files hit `F5` to run build and run the sotution

4. To enable `https` browsing for project, open `lunch.json` file inside `.vscode` folder and add the following line
```
"launchSettingsProfile": "https"
```

5. To enable `Hot Reload` feature in VS Code, edit the following line to lunch.json file
```
"preLaunchTask": "watch"
```

### 🚀 To build a project or solution
```
dotnet build
```

### 🚀 To build a nuget package
```
dotnet pack
```
### 🚀Update dotnet-tool
```
dotnet tool update --global dotnet-ef
```
### 🚀Initialise User Secret in project
```
dotnet user-secrets init -p [project name]
```
### 🚀Add User Secret in appsettings file
```
dotnet user-secrects set -p [project name] "MailSettings: Password" "this-is-secret-password"
```
### 🚀See list of User secret in project
```
dotnet user-secrets list -p [project name]
```