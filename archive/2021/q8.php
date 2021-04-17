<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<!-- <meta abacus-link='I' /> -->

<script type="text/template" id="description-template">
    <div>
        <h1 id="page" page="themissingkey">The Missing Key</h1>
    
        <p>You and your friend Bard are huge Marquette Basketball fans. The two of you have gone to every game this season, and you always match your outfits to stand out and make it on the Jumbotron. Your friend Bard, being a computer science major, loves to encrypt all his messages using RSA encryption.</p>
        <p>He explained to you he generated a pair of unique numbers <em>e</em> and <em>d</em> such that messages he encrypts with the value <em>e</em> can only be decrypted using the value <em>d</em>. He gave you the value <em>d</em>, erased it from his machine, and said to keep it private. He urged you not to lose <em>d</em> because you are the only one who has it and there is no backup.</p>
        <p>You won't see Bard till the game on Saturday, but you just got your phone repaired, and remembered to back up your messages to the cloud, but forgot to save the value of <em>d</em>.</p>

        <h3>Problem Description</h3>

        <p>Without <em>d</em> you can not decrypt any of his messages and don't know what you are supposed to wear for the game this Saturday. But you remember Bard ends all his message with <code>Ahoya!</code></p>
        <p>You do some research and find that <em>e</em> and <em>d</em> were generated using two unique prime numbers <em>p</em> and <em>q</em> and the following algorithm.</p>
        
        <ol>
            <li>Calculate <em>n = p × q</em>.</li>
            <li>Calculate <em>φ(n) = (p-1) × (q-1)</em>.</li>
            <li>Select integer <em>e</em> such that <em>gcd(φ(n), e) = 1; 1 &lt; e &lt; φ(n)</em>.</li>
            <li>Calculate <em>d</em> where <em>(d × e) mod(φ(n)) = 1</em>.</li>
        </ol>
        
        <p>With <em>M</em> representing the plaintext (unencrypted text), and <em>C</em> being the ciphertext (encrypted text).</p>
        <p>Using <em>e</em>, you can encrypt messages with: <em>C = M<sup>e</sup> (mod n)</em></p>
        <p>Using <em>d</em>, you can decrypt messages with: <em>M = C<sup>d</sup> (mod n)</em></p>
        <p>To solve this problem, <strong>write a program that uses <em>p</em>, <em>q</em>, and <em>ciphertext</em> to generate possible plaintexts and returns the plaintext that ends in Ahoya!</strong></p>
    </div>

    <hr>

    <div>
        <h2>Writing Your Solution</h2>

        <p>You will be provided <em>ciphertext</em> in the form of an <code>int</code> array where each element represents a character. To encrypt/decrypt the ciphertext apply the corresponding algorithms on each element of the array.</p>
	    <p>To convert the <code>int</code> array representation of cipher/plain text to a <code>String</code> representation use the provided <code>decode()</code> function.</p>
	    <p>Enter your solution in the body of the following method in the given code skeleton</p>
        
        <blockquote>
            <h4>Java Programmers</h4>
            <p>We have provided the <code>gcd(int a, int b)</code> function for you to use.</p>
            <p>Also, some of the numbers used in encrypting and decrypting are too big for the primitive <strong>int</strong> and <strong>long</strong> datatypes, so we provided the function <code>powMod(int b, int e, int m)</code> which performs <em>b<sup>e</sup> (mod m)</em></p>
        </blockquote>

        <h3>Method Signatures</h3>
        <ul>
            <li><code>p</code> and <code>q</code> are used in the RSA Algorithm described above.</li>
            <li><code>c</code> is an <code>int</code> array representation of the ciphertext.</li>
        </ul>

        <h4>Java</h4>
        <code>public static String codebreak(int p, int q, int[] c)</code>

        <h4>Python</h4>
        <code>def codebreak(p, q, c)</code>

        <h3>Sample Method Calls</h3>

        <h4>Java</h4>
        <p><code>codebreak(13, 17, new int[]{ 156, 104, 128, 36, 158, 50})</code> returns <code>Ahoya!</code></p>

        <h4>Python</h4>
        <p><code>codebreak(13 17 [156, 104, 128, 36, 158, 50])</code> returns <code>Ahoya!</code></p>

    </div>

    <hr>

    <div>
        <h2>Testing Your Program from the Console</h2>

        <h3>Console Input Format</h3>
        <ul>
            <li>the first line contains the number of test cases, <code>t</code></li>
            <li>for each test case, the following three input parameters appear on a line, space-separated:
                <ul>
                    <li><code>p</code>: integer value for <code>p</code></li>
                    <li><code>q</code>: integer value for <code>q</code></li>
                    <li><code>cipherhex</code>: The ciphertext array represented as a hex string (this is taken care of by the skeletons main method)</li>
                </ul>
            </li>
        </ul>

        <h3>Console Output Format</h3>
        <ul>
            <li>For each test, a single line with the plaintext.</li>
        </ul>

        <h3>Assumptions</h3>
        <ul>
            <li>1 &lt; <code>p</code> &lt; 100</li>
            <li>1 &lt; <code>q</code> &lt; 100</li>
            <li>0 &lt; <code>e</code> &lt; 200</li>
            <li>0 &lt; <code>d</code> &lt; 200</li>
            <li>Every test case has a corresponding plaintext</li>
        </ul>

        <h3>Sample Run</h3>
        <h4>Input:</h4>
        <pre>
1
13 17 9c6880249e32</pre>

        <h4>Output:</h4>
        <pre>
Ahoya!</pre>

        <h3>Sample Run Explanation</h3>
        <p>The sample run contains 1 test case (<code>t</code> = 1):</p>
        <ul>
            <li>
                <p>The hextext <code>9c6880249e32</code> encrypted using <code>p = 13</code> and <code>q = 17</code> and unknown value <em>e</em> is <strong><code>Ahoya!</code></strong> in plaintext.</p>
                <ul>
                    <li>
                        <p>The main method will translate <code>9c6880249e32</code> to an integer array <a href=""><code>156</code>, <code>104</code>, <code>128</code>, <code>36</code>, <code>158</code>, <code>50</code></a> to pass to <em>codebreak</em>.</p>
                    </li>
                    <li>
                        <p><em>codebreak</em> should determine that when <code>e = 41</code> and the calculated value <code>d = 89</code> the following will be true.</p>
                        <ul>
                            <li>
                                <p>Applying the decrypt algorithm on <a href=""><code>156</code>, <code>104</code>, <code>128</code>, <code>36</code>, <code>158</code>, <code>50</code></a> using <code>d = 89</code> and the provided <code>p=13</code> and <code>q=17</code> values will become <a href=""><code>65</code>, <code>104</code>, <code>111</code>, <code>121</code>, <code>97</code>, <code>33</code></a></p>
                            </li>
                            <li>
                                <p>Passing the array <a href=""><code>65</code>, <code>104</code>, <code>111</code>, <code>121</code>, <code>97</code>, <code>33</code></a> to <code>decode()</code> will return the text <code>Ahoya!</code></p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p>Because <code>codebreak</code> was able to find a set of <code>e</code> and <code>d</code> such that the decrypted text contains <code>Ahoya!</code> it can return the text <code>Ahoya!</code></p>
                    </li>
                </ul>
            </li>
        </ul>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
import math

def decode(text):
    return "".join(chr(c) for c in text)


"""TODO: Complete this method that finds a plaintext containing "Ahoya!" using the given args:
Args:
    p (int): p-value from the algorithm.
    q (int): q-value from the algorithm.
    ciphertext (int[]): ciphertext represented as an array of integers
Returns:
    string - decoded plaintext as a string
"""
def codebreak(p, q, ciphertext):
    
    # Write your code here

    return None

# It is unnecessary to edit the "main" function of each problem's provided code skeleton.
# The main function is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        inp = input().split(" ")

        p = int(inp[0])
        q = int(inp[1])
        m = [int(inp[2][i:i+2], 16) for i in range(0, len(inp[2]), 2)]

        print(codebreak(p, q, m))


main()</pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class TheMissingKey {
    public static int gcd(int a, int b) {
        if (b == 0)
            return a;
        return gcd(b, a % b);
    }

    public static int powMod(int b, int e, int m) {
        return java.math.BigInteger.valueOf(b).modPow(java.math.BigInteger.valueOf(e), java.math.BigInteger.valueOf(m))
                .intValue();
    }

    public static String decode(int[] message) {
        return java.util.Arrays.stream(message).mapToObj(i -> Character.toString((char) i))
                .collect(java.util.stream.Collectors.joining());
    }

    /**
     * Complete this method that finds a plaintext containing "Ahoya!"
     * 
     * @param p          --> p-value from the algorithm.
     * @param q          --> q-value from the algorithm.
     * @param ciphertext --> ciphertext represented as an array of integers
     * 
     * @return {string} - decoded plaintext as a string
     */
    public static String codebreak(int p, int q, int[] m) {
        
        // Write your code here

        return null;
    }

    /*
    * It is unnecessary to edit the "main" method of each problem's provided code
    * skeleton. The main method is written for you in order to help you conform to
    * input and output formatting requirements.
    */
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        for (int tests = in.nextInt(); tests > 0; tests--) {
            int p = in.nextInt();
            int q = in.nextInt();

            int[] c = java.util.Arrays.stream(in.next().split("(?<=\\G..)")).mapToInt(s -> Integer.parseInt(s, 16))
                    .toArray();

            System.out.println(codebreak(p, q, c));
        }
        in.close();
    }
}</pre>
</script>

<script type="text/template" id="python-solution-template">
    <pre class="prettyprint">
import math

def decode(text):
    return "".join(chr(c) for c in text)

def codebreak(p, q, ciphertext):
    n = p*q
    phi = (p-1)*(q-1)

    for e in range(2, phi):
        if math.gcd(e, phi) == 1:
            for d in range(phi):
                if (d * e) % phi == 1:
                    plaintext = decode((c**d) % n for c in ciphertext)
                    if "Ahoya!" in plaintext:
                        return plaintext
    return None


def main():
    for _ in range(int(input())):
        inp = input().split(" ")

        p = int(inp[0])
        q = int(inp[1])
        m = [int(inp[2][i:i+2], 16) for i in range(0, len(inp[2]), 2)]

        print(codebreak(p, q, m))


main()</pre>
</script>

<script type="text/template" id="java-solution-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class TheMissingKey {
    public static int gcd(int a, int b) {
        if (b == 0)
            return a;
        return gcd(b, a % b);
    }

    public static int powMod(int b, int e, int m) {
        return java.math.BigInteger.valueOf(b).modPow(java.math.BigInteger.valueOf(e), java.math.BigInteger.valueOf(m))
                .intValue();
    }

    public static String decode(int[] message) {
        return java.util.Arrays.stream(message).mapToObj(i -> Character.toString((char) i))
                .collect(java.util.stream.Collectors.joining());
    }

    public static String codebreak(int p, int q, int[] m) {
        int n = p * q;
        int phi = (p - 1) * (q - 1);
        for (int e = 2; e < phi; e++) {
            if (gcd(e, phi) == 1) {
                for (int d = 0; d < phi; d++) {
                    if ((d * e) % phi == 1) {
                        int[] plainint = new int[m.length];
                        for (int i = 0; i < m.length; i++) {
                            plainint[i] = powMod(m[i], d, n);
                        }
                        String plaintext = decode(plainint);
                        if (plaintext.contains("Ahoya!")) {
                            return plaintext;
                        }
                    }
                }
            }
        }
        return null;
    }

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);

        for (int tests = in.nextInt(); tests > 0; tests--) {
            int p = in.nextInt();
            int q = in.nextInt();

            int[] c = java.util.Arrays.stream(in.next().split("(?<=\\G..)")).mapToInt(s -> Integer.parseInt(s, 16))
                    .toArray();

            System.out.println(codebreak(p, q, c));
        }
        in.close();
    }
}</pre>
</script>