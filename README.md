# minicasty | cis 451/551 final project

## repo

[http://github.com/ryangurn/minicasty](http://github.com/ryangurn/minicasty)

## name

ryan gurnick

## project title

minicasty

## connection information

redacted for security here!

## project url

http://ix.cs.uoregon.edu/~rgurnick/final

## highlights
* so far just being allowed to use laravel is a major highlight.

## high level description / summary
this project is meant to provide podcast publishing services. there are many companies all over the internet that charge to generate an xml file and provide an interface to submit podcast information. i have decided to build a data model and interface to allow a normal person to self-host a podcast posting solution with some simple support. this application will handle metadata for one podcast and all of its episodes, it will handle secure file storage (utilizing the guid rather than allowing the user to access the file directly), and allow a user to publish a simple page online with content that relates to the podcast or an individual episode. 

in this application most of the fields in the database are strings, and i have decided to use an uuid as the primary key rather than an integer with auto increment to provide some level of security by obscurity when attempting to probe for assets. there are a variety of columns that are of the following types TEXT, MEDIUMTEXT, & LONGTEXT to support storing json objects within the table to prevent data segmentation through tables. lastly i utilize TIMESTAMPS to store date information about creation, the process of updating and other important dates, as well as TINYINT's that are either used as booleans or as a 0-9 set of options that are hard coded.  

most notably, the blue section at the top stores all the information related to the episodes directly, this is all of the information that allows for each episode to be generated in the xml output used for apple or spotify. in the settings group, that will allow for episodes to also have settings, as well as overall global settings (this will be used for storing the overall podcast settings too.) the assets and meta group will store information relating to uploaded images and mp3 files that will be accessible online via a secured file access url. there are a variety of standalone reference tables that are minimally related to, this group stored things like languages, countries, pages CRM styles, and apple podcasts categories. finally, we will get to the green section (pages + content) which will store the data related to the content on the simple CRM for the user. 

down below the data model are links to the official specs from apple and spotify that are roughly being used to define the data model. they provide excruciating information about the xml structure that i am converting into a mysql schema. (take a look this stuff is fascinating)

## data model (12/08/2020) 
![Model](model.png)

### physical design
1. `episodes`: this all stems from the episodes table, which holds some crucial information. mainly the information that is consistently metadata between both apple and spotify. that is the title, reference to audio asset, publishing date, text description, boolean for explicit content, and optionally a reference to an episode image asset.
2. `itunes`: the itunes table contains all the itunes maintained attributes that might be requested, **note that just because apple maintains these attributes does not mean they are the only ones requiring them...** the attributes are an itunes specific title, episode number, season number, episode type (either trailer/full/bonus) and if the episode is blocked from being published for some reason. these attributes are all optional to the user.
3. `spotify`: the spotify table contains spotify maintained attributes that generally only they will request, this includes the order number for the episode, start and end dates for publishing, and keywords for search indexing. 
4. `spotify_restrictions`: this table is just a many to many join between the countries table and spotify table to allow for restricting the locations which the episodes are published. 
5. `assets`: the assets table is critically important to store information about the type of file (ie: audio/image) as well as the path itself. additionally, there is a boolean accessibility attribute to turn off specific assets if desired. 
6. `settings`: this table stores very simple key value data that is generally related to the overarching podcast itself, such as the podcasts title/description/image/author metadata/owner metadata and more... all neatly indexed by some simple keys.
7. `statistics`: the statistics table will collect basic view counts for episode audio pages as well as website page views for an episode specific page. this is to give some insight into the number of times an audio file is loaded and page is viewed. there are three main attributes, a reference to a page (nullable), a reference to an episode (nullable), and an integer count.
8. `pages`: the pages table stores simple metadata about a page, that is a reference to an episode, the slug for the url of the page, title of the page, and two bools to determine if we display the podcast and or episode info.
9. `pages_content`: this table stores content from within each page in a block type of way. the attributes start with a reference to a page, a header and subtitle string, along with content. **note: the content can be markdown and will be parsed into simple html, with minimal styling.**
10. `countries`: this table stores iso information about countries, the name, 2 digit + 3 digit country codes for use in the rss files and some dropdowns.
11. `categories`: this information is the categories recognized by apple and spotify for their podcasts, this is generally referenced by the settings table but there is no FK constraint on this. the attributes contain a circular reference back to categories for a parent category, a programming string, and a name for the category.
12. `languages`: this table stores iso information regarding languages. it has 3 main attributes: the name of the language, 2 digit abbreviation and 3 digit abbreviation.

## list of applications
1. **adjusting podcast settings**: there is functionality to adjust the overarching podcast settings, such as the podcast's title or description along with the podcast 'album' art. this can be achieved via the settings section on the website and will aptly modify various rows in the `settings` table. you can upload a new podcast 'album' art image which also adjusts the `assets` table after the upload has been verified as this is the location that the path information will be stored for future reference.
2. **adding episodes**: the user has the ability to add episodes into the podcast, when this is done a variety of rows are created starting with a row in the `episodes` table, then followed by a row in the `assets` table (for the audio file, possibly two rows if there is an image), lastly we create an empty row in the `itunes` and `spotify` tables just as placeholders for future use.
3. **updating episodes**: the user can update the episode at any time and depending on what information they desire to edit the queries will target either `episodes`,`itunes`, and or `spotify`, `spotify_restrictions` tables to adjust the stored data.
4. **reading episode information**: the user can view episode information from the `episodes`, `itunes`, `spotify`, `spotify_restrictions` table all on one simple page.
5. **deleting episodes**: the user can delete episodes which essentially touches most of the tables mainly in use. here is the list in order of execution: `statistics`, `assets`, `spotify_restrictions`, `spotify`, `itunes`, `pages_contents`, `statistics` ,`pages`, `episodes`
6. **creating a web page for a specific episode**: wip
7. **public view of web page**: wip
8. **update/delete functionality for pages**: wip
9. **rss feed for submission to apple/spotify**: wip
10. **display podcast/episode information on episode specific page**: wip

## helpful things
* interesting note: all the podcasts on platforms like spotify and apple podcasts are either self hosted and stored on the podcast owner's server or managed on a server by a distribution company that charges. apple and spotify do not store the audio directly (genius, and a really great way for them to save money and allow for the owner to remain in complete control.)
* when working on a local machine, i wanted to use the same mysql version as ix, but ran into the issue of already having mariadb installed and running for other critical purposes on the same port. in dealing with this i decided to use docker on my local machine to work around this and just change the localhost port to '3307' with this i present the following helpful thing a command to docker that will setup the system properly for us. ```docker run -d -p 3307:3306 --name mysql -e MYSQL_DATABASE=minicasty -e MYSQL_USER=minicasty -e MYSQL_PASSWORD=123 -e MYSQL_ROOT_PASSWORD=123 -e MYSQL_ROOT_HOST=% -d mysql/mysql-server:8.0.22-1.1.18 --default-authentication-plugin=mysql_native_password``` just know that the username is minicasty and the password is 123 for that user and also root. this is just meant for testing on a local machine with docker
* [Apple Podcast Specification](https://help.apple.com/itc/podcasts_connect/#/itcb54353390)
* [Spotify Podcast Specification](https://podcasters.spotify.com/terms/Spotify_Podcast_Delivery_Specification_v1.6.pdf)

