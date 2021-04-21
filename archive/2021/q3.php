<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='D' /> -->

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="vendingmachine">Vending Machine</h1>
    
        <h3>Problem Description</h3>

        <p>Alex and her friends are studying (while practicing social distancing) for their exam next week. Alex, being the good friend that she is, offered to buy the entire group snacks from the vending machine. To keep it simple for Alex, they all decided to choose the same item. Alex only a set amount of cash in her wallet. The group needs to calculate how many of each item she can buy with the cash in her wallet. </p>
	    <p>To solve this problem, <strong>write a program that determines how many of each item you can buy with the given cash.</strong></p>

    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton:</p>

        <h3>Method Signatures</h3>

        <h4>Java</h4>
        <code>public static int[] vendingOptions(int numberOfItemsInMachine, int[] itemQuantities, double[] itemPrices, double cash)</code>

        <h4>Python</h4>
        <code>def vendingOptions(numberOfItemsInMachine, itemQuantities, itemPrices, cash)</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>vendingOptions(4, new int[]{ 2, 1, 4, 7 }, new double[]{ 10.0, 20.0, 7.0, 15.0 }, 25.5)</code> returns <code>[2, 1, 3, 1]</code></p>

        <h4>Python</h4>
        <p><code>vendingOptions(4, [2, 1, 4, 7], [10.0, 20.0, 7.0, 15.0], 25.5)</code> returns <code>[2, 1, 3, 1]</code></p>

    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>

        <h3>Console Input Format</h3>
        <ul>
            <li>The first line contains the number of test cases, <code>t</code></li>
        </ul>
        <p>For each test:</p>
        <ul>
            <li>The first line will contain the number of items in the vending machine</li>
            <li>The second line will contain the price of each item separated by a space</li>
            <li>The third line will contain the quantity of each item separated by a space</li>
            <li>The fourth line will contain the total cash</li>
        </ul>
        <h3>Assumptions</h3>
        <ul>
            <li><code>numberOfItemsInMachine</code> &gt; 0</li>
            <li>The number of elements in <code>itemQuantities</code> and <code>itemPrices</code> will always be equal to <code>numberOfItemsInMachine</code></li>
            <li>Every price in <code>itemPrices</code> &gt; 0</li>
            <li>Every quantity in <code>itemQuantities</code> ≥ 0</li>
            <li><code>cash</code> ≥ 0</li>
        </ul>
        <h3>Console Output Format</h3>
        <ul>
            <li>A single line with the quantity of each item you can afford separated by a space</li>
        </ul>
        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
1
4
10.0 20.0 7.0 15.0
2 1 4 7
25.5</pre>
	    <h4>Output:</h4><pre>
2 1 3 1</pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
"""
TODO: Write a program that determines how many of each item you can buy given the following parameters:

Parameters:
numberOfItemsInMachine --> (integer) The number of items in the vending machine.
itemQuantities --> (integer array) The quantities of each item in the vending machine
itemPrices --> (float array) The price of each item in the vending machine
cash --> (float) The amount of money you have to spend

Returns:
new integer array --> an integer array containing the number of each item you can buy.

"""
def vendingOptions(numberOfItemsInMachine, itemQuantities, itemPrices, cash):

    # Write your solution here

    return []

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():

    for _ in range(int(input())):
        # User Input #
        numOfItems = input()
        prices = input().split(" ")
        quantities = input().split(" ")
        allowance = input()

        itemCount = int(numOfItems)
        itemPrices = [0] * itemCount
        itemQuantities = [0] * itemCount
        cash = float(allowance)

        for x in range(itemCount):
            itemPrices[x] = float(prices[x])
            itemQuantities[x] = int(quantities[x])

        # Function Call
        canBuy = vendingOptions(itemCount, itemQuantities, itemPrices, cash)

        # Terminal Output #
        print(*canBuy, sep=' ')

main()</pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class VendingMachine {

    /**
    * TODO: Write a program that determines how many of each item you can buy given the following parameters:
    * 
    * @param numberOfItemsInMachine --> (integer) The number of items in the vending machine.
    * @param itemQuantities --> (integer array) The quantities of each item in the vending machine
    * @param itemPrices --> (double array) The price of each item in the vending machine
    * @param cash --> (double) The amount of money you have to spend
    *
    * @return new integer array --> an integer array containing the number of each item you can buy.
    */
    public static int[] vendingOptions(int numberOfItemsInMachine, int[] itemQuantities, double[] itemPrices, double cash) {

        // Write your solution here

        return new int[numberOfItemsInMachine];
    }

    /*
    * It is unnecessary to edit the "main" method of each problem's provided code
    * skeleton. The main method is written for you in order to help you conform to
    * input and output formatting requirements.
    */
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            String numOfItems = in.nextLine();
            String[] prices = in.nextLine().split(" ");
            String[] quantities = in.nextLine().split(" ");
            String allowance = in.nextLine();

            int itemCount = Integer.parseInt(numOfItems);
            double[] itemPrices = new double[itemCount];
            int[] itemQuantities = new int[itemCount];
            double cash = Double.parseDouble(allowance);

            for (int i = 0; i < itemCount; i++) {
                itemPrices[i] = Double.parseDouble(prices[i]);
                itemQuantities[i] = Integer.parseInt(quantities[i]);
            }

            int[] canBuy = vendingOptions(itemCount, itemQuantities, itemPrices, cash);

            for (int i = 0; i < itemCount; i++){
            	if (i != itemCount - 1){
                    System.out.print(canBuy[i] + " ");
                } else {
                    System.out.print(canBuy[i]);
                }
            }
            System.out.println("");
        }
        
        in.close();
	}

}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
"""
TODO: Write a program that determines how many of each item you can buy given the following parameters:

Parameters:
numberOfItemsInMachine --> (integer) The number of items in the vending machine.
itemQuantities --> (integer array) The quantities of each item in the vending machine
itemPrices --> (float array) The price of each item in the vending machine
cash --> (float) The amount of money you have to spend

Returns:
new integer array --> an integer array containing the number of each item you can buy.

"""
def vendingOptions(numberOfItemsInMachine, itemQuantities, itemPrices, cash):
    counter = 0.0
    buyable = [0] * numberOfItemsInMachine

    for x in range(numberOfItemsInMachine):
        while counter <= cash and (counter/itemPrices[x]) < itemQuantities[x]:
            if (counter+itemPrices[x]) > cash:
                break
            else:
                counter += itemPrices[x]
        buyable[x] = int(counter/itemPrices[x])
        counter = 0.0

    return buyable
    
# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():

    for _ in range(int(input())):
        # User Input #
        numOfItems = input()
        prices = input().split(" ")
        quantities = input().split(" ")
        allowance = input()

        itemCount = int(numOfItems)
        itemPrices = [0] * itemCount
        itemQuantities = [0] * itemCount
        cash = float(allowance)

        for x in range(itemCount):
            itemPrices[x] = float(prices[x])
            itemQuantities[x] = int(quantities[x])

        # Function Call
        canBuy = vendingOptions(itemCount, itemQuantities, itemPrices, cash)

        # Terminal Output #
        print(*canBuy, sep=' ')

main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class VendingMachine {

	public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        for (int tests = Integer.parseInt(in.nextLine()); tests > 0; tests--) {
            String numOfItems = in.nextLine();
            String[] prices = in.nextLine().split(" ");
            String[] quantities = in.nextLine().split(" ");
            String allowance = in.nextLine();

            int itemCount = Integer.parseInt(numOfItems);
            double[] itemPrices = new double[itemCount];
            int[] itemQuantities = new int[itemCount];
            double cash = Double.parseDouble(allowance);

            for (int i = 0; i < itemCount; i++) {
                itemPrices[i] = Double.parseDouble(prices[i]);
                itemQuantities[i] = Integer.parseInt(quantities[i]);
            }

            int[] canBuy = vendingOptions(itemCount, itemQuantities, itemPrices, cash);

            for (int i = 0; i < itemCount; i++){
            	if (i != itemCount - 1){
                    System.out.print(canBuy[i] + " ");
                } else {
                    System.out.print(canBuy[i]);
                }
            }
            System.out.println("");
        }
        
        in.close();
	}
	
	
	/*
	 * Problem description
	 * test data (potential; test run)
	 * what they have to do specifically
	 * 
	 * Fill the code in this method.
	 * 
	 * Given an array of doubles (prices of vending machine items), and a second array of integers (quantities of those items), and an amount of money as a double.
	 * return how much if any, of each item you could buy if you used all your money on a single item.  
	 * 
	 * also have a second array of quantities of each item and return how many of each item you could buy if you only bought that item. 
	 * 
	 * 
	 */
	public static int[] vendingOptions(int numberOfItemsInMachine, int[] itemquantities, double[] itemPrices, double cash)
	{
		double counter = 0.0;
		int[] buyable =new int[numberOfItemsInMachine];
		for(int x = 0; x < numberOfItemsInMachine; x++)
		{
			while(counter <= cash && (counter/itemPrices[x]) < itemquantities[x])
			{
				if((counter+itemPrices[x])>cash)
					break;
				else
					counter+= itemPrices[x];
			}
			buyable[x]= (int)(counter/itemPrices[x]);
			counter = 0.0;
		}
		return buyable;
	}

}</pre>
</script>