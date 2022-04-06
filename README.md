# My Own MVC with PHP
Model–view–controller (MVC) is a software design pattern that divides linked program logic into three interrelated elements. It is often used for building user interfaces. This is done to distinguish internal information representations from how information is presented to and accepted by the user.
## Model
The pattern's core element. It's the application's dynamic data structure, which is separate from the user interface. It has direct control over the application's data, logic, and rules.
### Anatomy of a Model
Model classes are stored in your models/ directory.

The basic prototype for a model class is this:

I have two types of model 
#### Index page

File name : index_model.php

class name : IndexModel
#### Other pages
File name : file name start url Sub-directories then add _model.php (eg. insert_model.php, about_model.php, xyz_model.php)

class name : Class name start with capital letter of url Sub-directories then Model (eg. InsertModel,AboutModel, XyzModel)
## View
A chart, diagram, or table is a visual representation of data. It is feasible to have many views of the same data, such as a bar chart for management and a tabular view for accountants.
### Creating a View
Vew Files stored in Views/ directory.

I have two types of vew 
#### Index page
File name : index_view.php
#### Other pages
File name : file name start url Sub-directories then add _view.php (eg. insert_view.php, about_view.php, xyz_view.php)

## Controller
Accepts input and turns it to model or view instructions.
### Let’s try Controller
Controller Files stored in Controller/ directory.

I have two types of vew 
#### Index page
File name : index_controller.php
#### Other pages
File name : file name start url Sub-directories then add _controller.php (eg. insert_controller.php, about_controller.php, xyz_controller.php)
