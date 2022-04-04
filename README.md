1. Fresh phalcon app without any extra code

2. Create 5 pages

    a. Product add (product/add)

        i. Form with fields as: Name (text field), Description (textarea), Tags (text field), Price (text field), Stock (text field)

    b. Product list (product) with all fields as columns mentioned above in a table

    c. Order add (order/add)

        i. Form with fields as: Customer name (text field), Customer Address (textarea), Zipcode (text field), Product (Dropdown), Quantity (text field)

    d. Orde list (order) with all fields as columns mentioned above in a table

    e. Settings

        i. A form with following fields
        
            1. Title optimization : Dropdown (With tags, Without tags)
            2. Default Price: textfield
            3. Default Stock: textfield
            4. Default Zipcode: textfield

3. Every forms and listing must working as intended (fullcode)

4. Now use Phalcon events to do following tasks

    a. Whenever any product is added then
        i.   If Title Optimization is set to "With Tags" then update product name as "Name+Tags"
        ii.  If Default price is set to any number say "10" and product price is empty or 0 then set product price as deafult price
        iii. If Default Stock is set to any number say "10" and product stock is empty or 0 then set product stock as deafult stock

    b. Whenever any order is being created then
        i.   If Default Zipcode  is set  and customer's zipcode is empty then set zipcode value as deafult zipcode


Note: You have to create a common handler for all the custom events fired