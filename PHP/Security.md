# IEEE Task-13

## Why Security?

- Because websits are in public and we have to protect users 's personal information

## Most Common Attacks

- #### Account Lock Attacks
- #### Brute Force Attacks
- #### Modified Requests
- #### Path Travelsel
- #### SQL/PHP Injection Attacks
- #### XSS Attacks
- #### Session Hijack
- #### Phishing

> Note: **_Don't Trust User Data_**

## What Is Social Engeneering?

- Social engineering refers to the psychological manipulation of individuals to gain access to confidential information or perform unauthorized actions.

> Notes:
> <br>
>
> - **So try to keep confidential information hidden.**
> - **Do not post your sensitive information on social media.**
> - **Use 2 Step Verification**
> - **Use password reset security questions**
> - **Always Check Your URL Carefully**

<hr>

## Keeping Coding Private:

- ### Keep Functional Code Private:

  > - Avoid putting your functions in `index.php` file.
  > - Use **Private** and **Public** folders.
  > - Avoid directory listing. -> Use `index.php` in Every Single folder
  > - Use htaccess file -> Options -Indexes -> `403 Forbidden`
  > - Don't save your sensitive data into `JSON` File

## PHP Code Injection

- Take care when you use `Include` or `Require` keywords

  ```php

  //Index.php
  $page = isset($GET['page']) ? $_GET['page'] : 'home.php';

  include($page);
  // Here Hacker Can Use Path Traversal Vulnerability Or Upload Any Harmful Files, .etc

  //ex: localhost/index.php/page=harmful.php

  ```

  > _Some Solutions :_

  - To Ignore non php files:
    ```php
        require($page . '.php')
    ```
  - To Include just php files that exist in your folder:

    ```php
    $folder = '';
    $files = glob($folder.'*.php');

    // Check if the Page in folder php files array
    if(in_array($page  '.php' $files)){
      require($page . '.php');
    }else{
      echo "Couldn't Find File"
    }
    ```

    <hr>

    

