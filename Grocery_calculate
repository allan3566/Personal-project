grocery_history = []  # empty data structure

# Variable used to check if the while loop condition is met
stop = False  # if conditions aren't met

while not stop:  # if conditions are met
    grocery_item = {'item_name': 'name', 'quantity': 'number', 'cost': 'price'}  # populated list
    # Accept input of the name of the grocery item purchased.
    name = input('item_name:')  # user input for grocery name

    # Accept input of the quantity of the grocery item purchased.
    number = input('quantity:')  # user input for quantity

    # Accept input of the cost of the grocery item input (this is a per-item cost).
    price = input('cost:')  # user input for cost

    # Using the update function to create a dictionary entry which contains the name, number and price entered by the user.
    grocery_item = {'item_name': name, 'quantity': int(number),
                    'cost': float(price)}  # populated dictionary int for number, float for decimals

    # Add the grocery_item to the grocery_history list using the append function
    grocery_history.append(grocery_item)  # using append function to add grocery_item to grocery_history

    # Accept input from the user asking if they have finished entering grocery items.
    checkout = input(
        "Would you like to enter another item?\n type 'c' to continue or 'q' to quit:\n")  # user input to quit or continue

    if checkout == 'q':  # check's users quit or continue input
        stop = True
# # Define variable to hold grand total called 'grand_total'

grand_total = 0  # grand_total variable
###Define a 'for' loop.
for item in grocery_history:  # for loop

    # Calculate the total cost for the grocery_item.
    item_total = item['quantity'] * item['cost']

    # Add the item_total to the grand_total
    grand_total = grand_total + item_total

    # Output the information for the grocery item to match this example:
    # 2 apple	@	$1.49	ea	$2.98
    print(str(item['quantity']) + ' ' + str(item['item_name']) + ' @ $' + str(item['cost']) + ' ea $' + str(item_total))

    # Set the item_total equal to 0
    item_total = 0
# Print the grand total
print("Grand total: $%f" % grand_total)
