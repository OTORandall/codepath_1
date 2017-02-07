# Project 1 - Globitek CMS

Time spent: 6 hours spent in total

## User Stories

The following **required** functionality is completed:

1. [Y]  Required: Create a Users Table
  * [Y]  Required: Use the command line to connect to the database "globitek".
  * [Y]  Required: Define a table "users" with the required columns.

2. [Y]  Required: Create a Page with an HTML Form
  * [Y]  Required: It has required text inputs.
  * [Y]  Required: It submits to itself.
  * [Y]  Required: It looks correct in a browser.
  
3. [Y]  Required: Detect when the form is submitted.
  * [Y]  Required: When page loads, page displays the form.
  * [Y]  Required: When form submits, page retrieves the form data.

4. [Y]  Required: Validate form data.
  * [Y]  Required: Require the provided validation functions library.
  * [Y]  Required: Validate the presence of all form values.
  * [Y]  Required: Validate that no values are longer than 255 characters.
  * [Y]  Required: Validate that first\_name and last\_name have at least 2 characters.
  * [Y]  Required: Validate that username has at least 8 characters.
  * [Y ]  Required: Validate that email contains a "@".

5. [Y]  Required: Display form errors if any validations fail.
  * [Y]  Required: Do not submit the data to the database.
  * [Y]  Required: Redisplay the form with the submitted values filled in.
  * [Y]  Required: Report all errors as a list above the form.
  * [Y]  Required: Test each field to ensure you get the expected errors.

6. [ Y  Required: Submit successfully-validated form values to the database.
  * [Y]  Required: Write an SQL insert statement.
  * [Y]  Required: Add current date and time to "created\_at".
  * [Y]  Required: Follow best practices regarding the query result and database connection.
  * [Y]  Required: Use the command line to check the records.

7. [Y]  Required: Redirect the user to a confirmation page.
    * [Y]  Required: Locate the page "public/registration\_success.php".
    * [Y]  Required: Redirect the user to the new page. ([Tips](#!hints))

8. [Y]  Required: Sanitize all dynamic output for HTML. ([Tips](#!hints))


The following advanced user stories are optional:

* [ ]  Bonus 1: Validate that form values contain only whitelisted characters.

* [ ]  Bonus 2: Validate the uniqueness of the username.


## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/u2Dv0F8.gif' title='Video Walkthrough' width='993 x 558' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [RONGFA LU]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
