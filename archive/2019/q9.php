<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<script type="text/template" id="description-template">
    <h1 id="page" page="bonusquestion">Unit Testing and Test Driven Design</h1>
    <div>
        <h3>Problem Description</h3>

        <p>The Four Amigos had a fantastic time in Tokyo, Japan and are now ready to head home. They board their flight and
            arrive back in Milwaukee, WI just in time to make it to the 2019 Marquette Programming Competition.</p>

        <p>They arrive, have solved questions 1-8, and have just written their solution for the bonus question. One problem,
            they don't know how to test it.</p>

        <p>Here's what the implemented method, "formLargestNumber" does: given an array of positive numbers, arrange them in
            a way that yields the largest value. For example, the possible ways to arrange the numbers 10, 11, and 2 are:
        </p>

        <ul>
            <li>10112</li>
            <li>10211</li>
            <li>11102</li>
            <li>11210</li>
            <li>21011</li>
            <li>21110</li>
        </ul>

        <p>"21110" has the largest value, so the formLargestNumber method returns this when given <code>10, 11, 2</code> as
            input.</p>

        <p>To solve this problem, <strong>write unit tests to make sure that the formLargestNumber method correctly outputs
                the largest value in every different type of test case.</strong></p>

        <h2>Writing Your Solution</h2>

        <p>We are looking for specific test cases consisting of different combinations of numbers that prove your
            understanding of the formLargestNumber method and your ability to think about test cases critically.</p>

        <p>Enter your additional test cases in the body of the test class in the given code skeleton,
            <code>LargestNumberTest.java</code>.</p>

        <p>An implementation of LargestNumber.formLargestNumber is provided for you, so you can run your tests on it.
            <strong>Only submit your test file to the judges. We will use different versions of LargestNumber to evaluate
                your unit tests</strong>.</p>
    </div>
    <div>
        <h3>Unit Tests</h3>

        <h4>Java</h4>
        <p>Java unit tests are written in a test class as separate methods, marked with the <code>@Test</code> annotation.
            Within each test method, call the <code>assertEquals</code> method to write your test: pass in an "expected"
            result, and the actual result of the formLargestNumber call to test if they are the same. <code>JUnit</code> is
            the Java library that supports Java unit tests.</p>

        <p>For example, the given skeleton already contains a single unit test method, relating to the example from above:
        </p>

        <pre>    
@Test
public void testFormLargestNumber1() throws Exception {
    assertEquals(21110, LargestNumber.formLargestNumber(new int[] {10, 11, 2}));
}
        </pre>

        <h4>Python</h4>
        <p>Python unit tests are written in a test class as separate methods. The test class extends
            <code>unittest.TestCase</code>. Within each test method, call the <code>self.assertEqual</code> method to write
            your test: pass in an "expected" result, and the actual result of the formLargestNumber call to test if they are
            the same. <code>unittest</code> is the native Python module that supports Python unit tests.</p>

        <p>For example, the given skeleton already contains a single unit test method, relating to the example from above:
        </p>

        <pre>
def test_1(self):
    self.assertEqual(21110, LargestNumber.formLargestNumber([10, 11, 2]))
        </pre>

        <h2>Running your Unit Tests</h2>

        <h4>Java</h4>

        <p>Some Java IDE's allow you to run JUnit tests directly from the IDE.</p>
        <p>However, all workstations allow you to run JUnit tests using java commands.</p>
        <p>To run your tests:</p>

        <ol>
            <li>Navigate to the folder containing your <code>LargestNumberTest.java</code> test file.</li>
            <li>Copy the following provided files into this folder:</li>
        </ol>

        <ul>
            <li>The implementation file <code>LargestNumber.java</code></li>
            <li>The unit testing library <code>junit-platform-console-standalone-1.5.0-M1.jar</code></li>
            <li>The unit test script <code>runTests.bat</code></li>
        </ul>

        <ol>
            <li>Run the tests by double clicking on the unit test script: <code>runTests.bat</code></li>
        </ol>

        <p>If the provided implementation passes your unit tests, <code>JUnit</code> will indicate that all tests are
            successful.</p>

        <h4>Python</h4>

        <p>The provided code skeleton will run your unit tests. Verify that the provided largestNumber implementation file
            <code>LargestNumber.py</code> exists in the same location as your <code>LargestNumberTest.py</code> file, then
            simply run your tests file in the same way you would run any other Python file.</p>

        <p>If the provided implementation passes your unit tests, <code>unittest</code> will indicate that all tests have
            passed
            (it will output either "OK" or "FAILED").</p>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-solution-template">
    <pre>
from functools import cmp_to_key

def formLargestNumber(digits):
    inputs = [str(digit) for digit in digits]

    def lengthen_with_loops(string, length):
        orig_length = len(string)
        for i in range(int(length / orig_length)):
            string += string
        return string[:length]

    def compare_nums(first, second):
        if len(first) < len(second):
            first = lengthen_with_loops(first, len(second))
        elif len(second) < len(first):
            second = lengthen_with_loops(second, len(first))
        
        sorted = [first, second]
        sorted.sort()
        if sorted[0] == first:
            return -1
        else:
            return 1

    inputs.sort(key=cmp_to_key(compare_nums), reverse=True)

    return int(''.join(inputs))
    </pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre>
import java.util.Arrays;
import java.util.Comparator;

public class LargestNumber {
    
    
    public static int formLargestNumber(int[] digitList) {
        String[] inputs = new String[digitList.length];

        for (int i = 0; i < inputs.length; ++i) {
            inputs[i] = Integer.toString(digitList[i]);
        }

        Arrays.sort(inputs, new Comparator<String>() {
            @Override
            public int compare(String firstString, String secondString) {
                if (firstString.length() < secondString.length()) {
                    firstString = lengthenWithLoops(firstString, secondString.length());
                } else if (secondString.length() < firstString.length()){
                    secondString = lengthenWithLoops(secondString, firstString.length());
                }
                return secondString.compareTo(firstString);
            }
        });

        int s = 0;

        for (String y : inputs) {
            for (int i = 0; i < y.length(); ++i) {
                s = y.charAt(i) - '0' + s * 10;
            }
        }

        return s;
    }
    
    public static String lengthenWithLoops(String s, int length) {
        int origLength = s.length();
        for (int i = 0; i < length / origLength; i++) {
            s += s;
        }
        return s.substring(0, length);
    }
}
    </pre>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre>
import unittest
from LargestNumber import formLargestNumber

class TestLargestNumber(unittest.TestCase):
    
    # Two test cases are provided for you. You may use them as a template to add additional test
    # methods to this class.

    def test_1(self):
        self.assertEqual(83141, formLargestNumber([8, 3, 1, 14]))

    def test_2(self):
        self.assertNotEqual(14831, formLargestNumber([8, 3, 1, 14]))

    """
    TODO: Add test cases that prove your understanding of fringe (or unusual) combinations of numbers
            that show you've thought about different ways to test the program 
    """

# It is unnecessary to edit the "main" method of each problem's provided code skeleton.
# The main method is written for you in order to help you conform to input and output formatting requirements.
def main():
    unittest.main()
main()            
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre>
import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

public class LargestNumberTest {

    // Two test cases are provided for you. You may use them as a template to add additional test
    // methods to this class.

    @Test
    public void testFormLargestNumber() throws Exception {
        assertEquals(83141, LargestNumber.formLargestNumber(new int[] {8, 3, 1, 14}));
    }
    
    @Test
    public void testFormLargestNumber2() throws Exception {
        assertNotEquals(14831, LargestNumber.formLargestNumber(new int[] {8, 3, 1, 14}));
    }

    // TODO: Add test cases that prove your understanding of fringe (or unusual) combinations of numbers
    // that show you've thought about different ways to test the program.

}
    </pre>
</script>