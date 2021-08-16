# crud - Create, read, update and delete

A typical CRUD implementation allows the user or admin to create, read, update and delete data and will typically be used for any systems relying on dynamic data.

## Must-have features

As a kid, maybe you were collecting things. Sea shells, Pokemon cards, stamps, ... With Pokemon being popular again, it can be interesting to build a site to make an inventory of your collection.

💡 There's a lot to forms: validation, styling or retaining data when validation fails. Doing all this can be time consuming, so focus any the logic first for this exercise.

## Preparation

- [x] Think of a collection you'd like to have an inventory for: Birds
- [x] What information is interesting to keep track of for that kind of objects?
  - [x] BIRD: Bird ID (Code), Common Name, Scientific Name, Local Name (aka), etc,
  - [x] LOCATION: Location Id, Location Name, Longitude, Latitude, etc ... images,
  - [x] All data is of data type varchar, except lon/lat in integer
- [x] Prepare the database structure to contain this info, and add some quick dummy content.

  - [x] Database [(schema)](https://en.wikipedia.org/wiki/Database_schema).
  - [x] GUI [Can use mysql workbench with use of mysl database](https://phoenixnap.com/kb/how-to-create-mysql-database-workbench) or [mySql server](https://www.educative.io/blog/what-are-database-schemas-examples) or phpMyAdmin from MAMP
  - [x] Connect to MySQL server: phpMyAdmin from MAMP. Can also use smae phpMyAdmin to create db instead of using the GUI-mysqlWorkbench
    - [x] Create table(s).
    - [x] Add columns and [Choose their data types: check tooltip](https://stackoverflow.com/questions/3663952/what-do-column-flags-mean-in-mysql-workbench). [read article](https://dev.mysql.com/doc/workbench/en/wb-table-editor-columns-tab.html). [latitude, longitude datatype ? ](https://www.syntaxbook.com/post/3076O3-what-is-the-ideal-data-type-to-use-when-storing-latitude-longitudes-in-a-mysql-database)
    - [x] Add data to a table
    - [x] Might need to refresh the (db) schema now and then. Apply after finishing any addition or update.

- [?] Have a look at the provided structure (make as much use of it as you can, it will pay off later)

## How to connect to the db

- [ ] Use class to get db into your project
- [ ] Query data using File Script or mySQL Shell

## Step 1: read

- [ ] On the overview page, build an overview of everything in the collection (you will find some provided code that's helpful for this)

-----END OF DAY 1----------

## Step 2: create

- [ ] Build a form that contains all the relevant fields
- [ ] Once the form is submitted, save this info as a new entry in the database
- [ ] In a real application, you'd validate all of the data. In this case it's optional: focus on the database parts first

## Step 3: update

- [ ] Make a new page edit.php
- [ ] When clicking on an edit link for an entry, the edit page is loaded for that specific item
- [ ] When the edit form is submitted, the relevant entry in the database is updated

## Step 4: delete

- [ ] Build a link to delete.php that will delete a specific product from the database
      Afterwards, it will redirect to the overview

## Bonus rounds:

- [ ] Check who might need your help. Maybe your discoveries can already prove valuable to your peers?
- [ ] Pair up with someone: what difference do you have in your approach? Discuss and look for opportunities to further improve your code.
- [ ] Once an item is clicked, a detail page is loaded (called show.php, no styling needed). What PHP technique can you use to specify the id of that product on the detail page?
- [ ] So everything works for the good guys? Nice! What if the bad guys discover your site too...? Read up on SQL injection and protect your code against it.
- [ ] What interesting data can you include for your collection: images or fetch some stuff from an API - found something? Go for it!
