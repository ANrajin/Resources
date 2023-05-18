- [Verify git commits](https://docs.github.com/en/authentication/managing-commit-signature-verification/telling-git-about-your-signing-key)

- Run this command in git bash to provide GPG key support to `Visual Studio`

```
git config --global gpg.program "C:\Program Files\Git\usr\bin\gpg.exe"
```
- Remove GPG key from windows
```
gpg --detele-key [keyId]
```

- Remove GPG secret key from windows
```
gpg --delete-secret-key [keyId]
```
