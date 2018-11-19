### Class Object and Method in PHP:

~~~   
class Person{
    public $name = "Mobarok";
    private $age;
}
$personOne = new Person;
echo $personOne->name;
~~~
* Class এর মধ্যে variable কে property বলে।
* Function কে Method বলে। 

* object এর মেম্বার(property) কে call করার সময় $ দিতে হয় না।  
        ~~~ $personOne->name; ~~~

* public/private/protected হচ্ছে Access Modifier, এগুলা declare না করলে তা by default public থাকবে।

* class এ object এর মেম্বার(property,method) এ access করার জন্য "->" দিতে হয়। its  official name is "Object Operator"

its a personal learning documentation, continue...
