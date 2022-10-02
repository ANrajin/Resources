# DotNET development with vscode

reference - https://learn.microsoft.com/en-us/dotnet/core/tools/dotnet-sln
reference - https://learn.microsoft.com/en-us/dotnet/core/tools/dotnet-add-package

1.  To create a new solution
dotnet new sln -o <SolutionName>

2.  To create a new WebApi Project
dotnet new webapi -o <ProjectName>

3.  To create a new Class Library Project
dotnet new classlib -o <ClassLibraryName>

4.  To add all project into solution recursively (windows Powershell only)
dotnet sln add (ls -r **/*.csproj)

5. To build a project or solution
dotnet build

6.  Add project reference / class library to the project (https://learn.microsoft.com/en-us/dotnet/core/tools/dotnet-add-reference)
dotnet add <Destination> reference <Classlibrary/reference>
dotnet add reference <lib1/lib1.csproj> <lib2/lib2.csproj>
