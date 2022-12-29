Page concept and overview:


List of URLs and what they do:
    /user/login - the login page, this is also the frontpage of the website, that lets you login to the site
    /user/register  - the registration page that lets you sign up for the site
    /user/userlist - returns a table of users signed up on the page - only reachable when logged in
    /home/uploadpage - lets you upload an image to the website - only reachable when logged in
    /home/dashboard - Shows an image feed of all pictures uploaded to the site - only reachable when logged in
    /user/logout - logs you out and returns you to the login page.


How to setup the project:
    -php should be started from the root folder "Kawog17"
    -db_config.php can be found in "App/core"
    -migration.sql can be found in "install"
    -Ajax 
    
security:
    -XSS i believe is that you can not redirect to pages you shouldn't be able to read, through the URL, this is hopefully not possible due to how the controllers work
    -SQL injections should not be possible as it prepared statements are used
    -Only images should be able to be uploaded, since we check for the file extentions in the home model
    -Passwords are hashed

List of known errors:

    -In the registration, the Name and Username does not use Regex, I tried to find something useful to put there but it didn't make sense.
    -The home model does not return an error on wrong file extentions.
    -I do not understand the API part of this assignment sadly, I have tried making what is in the API in my own way, sadly this is not following the exact design as it's asked for. What I think is wrong here, is that I'm just not good enough at this yet.
    
    -blobs not being converted to pictures, this is a major one, but I've tried for several days to convert the blob back into a picture, and it has yielded nothing, the closest i've gotten was a totally black website with a square in the middle, this was with a php header with Content-type image. I have also tried with, for example,  a '<img src="data:filetype;base64,'.base64:encode(stipslashes($photo->image)).'" kind of code amongs others, and they yielded no useable results. this also lead to the images not having the username for the uploader in them, since I spend all my time trying to fix this issue, as it's the core of the website. ALso tried with an JS code where I would GET the image, and set the rsponseType to "blob", this did also not work out sadly.