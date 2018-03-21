# [<t style="color: Pink;">PINK</t>] Allez Cuisine!

### Problem Description

With Darth Von Glue defeated, the judges promptly inform Lom and Chaz that there is still time left in the competition! They quickly finish cooking and are ready to serve up their dishes, but suddenly remember the judges' serving rule: all contestants must fill the judging table with their dishes!

To best serve their three-course dish, Lom and Chaz decide to use triomino-shaped plates - plates made up of three equally sized, square portions:

![IMG](http://i.imgur.com/5dkypat.png)

Since these plates have corners, the heroes are confident they are able to fill the judging table in a variety of ways. To commemorate their victory over Darth Von Glue, Lom and Chaz decide to leave the arrangement of the plates up to chance: they will randomly select an arrangement from a set of valid arrangements. To do so, however, they will need to know the number of valid ways to fill a rectangular table with triomino plates.

To help Lom and Chaz finish strong in the competition, **write a program that determines the number of ways to fill a given size rectangular grid with triomino-shaped pieces.**

For example, if Lom and Chaz find that the rectangle they need to fill is 2-by-3, they will know that there are three possible triomino-fitting arrangements:

![IMG](http://i.imgur.com/zBZbwZH.png)

* * *

## Writing Your Solution

Enter your solution in the body of this method in the given code skeleton:

You can download the skeletons here([java](/download/java/s8), [python](/download/python/s8))

### Method Signature

Java:

```Java

public static int countTriominoFittings(int rows, int columns)
```

Python:

```Python

def countTriominoFittings(rows, columns):
```

### Sample Method Calls

`countTriominoFittings(3, 4)`  
Returns: `23`

`countTriominoFittings(2, 4)`  
Returns: `-1`

* * *

<p style="page-break-after:always;"></p>

<br />

## Testing Your Program From the Console

After writing your program into the given code skeleton, test your solution by running the program and entering sample input in the following format.

### Console Input Format

-   The first line will contain a single integer T, representing the number of test cases to follow.
-   T lines follow, each containing integers N and M, separated by a space, indicating a test case of a grid with N columns and M rows.

### Assumptions

-   `1  < T < 10`  
-   `0  < N, M < 9`  

### Console Output Format

For each test case, prints out one value (the number of ways the grid could be filled). Note that the output value may be zero.

### Sample Run

```Text

Input:

2
3 4
2 4

Output:

23
-1

```
