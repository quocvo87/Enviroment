| 1. Introduction
----------------
    1.1 What is .env
            .env is enviroment variables that'll gather all Operation System and Project enviroment variables

    1.2 Why do we need to use this .env
            When you development a project, you will have some sentensive information as PASSWORD, KEY....
            that you can't share for another one.
                Example:
                    config.action_mailer.smtp_settings = {
                      address: "smtp.gmail.com",
                      port: 587,
                      domain: "example.com",
                      authentication: "plain",
                      enable_starttls_auto: true,
                      user_name: ENV["GMAIL_USERNAME"],
                      password: ENV["GMAIL_PASSWORD"]
                    }
            therefore who want to use this project, so they will setting their GMAIL_USERNAME, GMAIL_PASSWORD in .env or in enviroment variable of Operation System


| 2. Directory Struct
-----------------------

    Root
    |__.env - setting your enviroment available here
    |
    |__index.php -> run for test
    |
    |__composer.json - package dependency

-----------------------


| 3. Step by step do it
-----------------------

    3.1 Clone/download Enviroment folder to your computer
        3.1.1 Download from browser
            3.1.1.1 Goto Enviroment folder > D:\YourFolder\Enviroment
            3.1.1.2 Run composer: composer install
            3.1.1.3 Run file D:\YourFolder\Enviroment\index.php for test

-----------------------

| 4. About Enviroment variables
-----------------------

    4.1 Enviroment Variables in your project
        4.1.1 Add new enviroment variable at: D:\YourFolder\Enviroment\.env
        4.1.2 Example
                + Go to: D:\YourFolder\Enviroment\.env
                + add TRUE_ME='This is value of TrueMe enviroment variable'
                + Test: edit file D:\YourFolder\Enviroment\index.php
                    + var_dump(getenv('TRUE_ME')); // 
                    + you can see: 'This is value of TrueMe enviroment variable'

    4.2 Enviroment variableis of Operation System (WINDOW)
        4.2.1 Open terminal: Windown + r > type: cmd > enter
        4.2.2 Check enviroment variable is existing: set TRUE_ME_WINDOW
            If return data that's mean it's existing, else it's empty
        4.2.3 Set Enviroment variable
            Example: set TRUE_ME_WINDOW='This is value of TrueMe on window variable'
        4.2.4 Restart your computer to enviroment variable TRUE_ME_WINDOW affect
        4.2.5 Test above variable
            + Test: edit file D:\YourFolder\Enviroment\index.php
                + var_dump(getenv('TRUE_ME_WINDOW')); // 
                + you can see: 'This is value of TrueMe on window variable'



-----------------------

