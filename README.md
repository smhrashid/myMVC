# My Own MVC with PHP
Model–view–controller (MVC) is a software design pattern that divides linked program logic into three interrelated elements. It is often used for building user interfaces. This is done to distinguish internal information representations from how information is presented to and accepted by the user.
## Model
The pattern's core element. It's the application's dynamic data structure, which is separate from the user interface. It has direct control over the application's data, logic, and rules.
### Anatomy of a Model

Model classes are stored in your models/ directory.

The basic prototype for a model class is this:

I have to types of model 
#### Index page

File name : index_model.php

class name : IndexModel
#### Other pages

File name : file name start url Subdirectory then add _model.php (eg. insert_model.php, about_model.php, xyz_model.php)

class name : Class name start with capital letter of url Subdirectory the n Model (eg. InsertModel,AboutModel, XyzModel)

## View
A chart, diagram, or table is a visual representation of data. It is feasible to have many views of the same data, such as a bar chart for management and a tabular view for accountants.
## Controller
Accepts input and turns it to model or view instructions.
