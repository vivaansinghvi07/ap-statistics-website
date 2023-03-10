<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 4 Notes
<?php endblock() ?>
<?php startblock('title') ?>
Shifting and Combining Random Variables
<?php endblock() ?>

<?php startblock('notes') ?>
    <li>Random variables can be&nbsp;<strong>transformed,&nbsp;</strong>which generally involves addition, subtraction, multiplication, or division
        <ul>
            <li>As discussed in <a class = "notelink" href = "/units/unit2/notes/unit2.2.html" target="_blank">Unit 2</a>, addition/subtraction simply shifts the data, including the center, and does not affect measures of variance
                <ul>
                    <li>Multiplication and division scale both the data and any measures of variation, such as the standard deviation being scaled once and the variance being scaled twice by the same value</li>
                </ul>
            </li>
            <li>For a discrete random variable, to transform it, simply apply the operation to each possible outcome
                <ul>
                    <li>However, DO NOT touch the probabilities - they remain constant</li>
                </ul>
            </li>
            <li>For a continuous random variable, simply note the things mentioned above</li>
            <li>Note that, again, the shape of the distribution has no change</li>
            <li>An example for why you would want to do this:
                <ul>
                    <li>On an airline, say variable \(X\) represents the number of people who show up</li>
                    <li>If you want to calculate how much would be paid in total depending on how many people come, simply scale \(X\) by the price of each ticket, to create the new variable \(Y\), representing revenue from the flight</li>
                    <li>Finally, if you need to subtract the cost of the airline, you can simply subtract the cost from each outcome in \(Y\)</li>
                </ul>
            </li>
            <li>Finally, you can have a <strong>linear transformation</strong>
                <ul>
                    <li>This is when a variable is defined as \(Y= a + bX\), where \(X\) is another random variable</li>
                    <li>\(\mu_Y = a + b \cdot \mu_X\)</li>
                    <li>\(\sigma_Y = \left| b \right| \cdot \sigma_X\)
                        <ul>
                            <li>We are taking the absolute value because \(b\) could be negative, and standard deviation is supposed to be always positive</li>
                        </ul>
                    </li>
                    <li>In the previous example, \(a\) could represent the cost of the airline (would have to be negative) and \(b\) could represent price per ticket
                        <ul>
                            <li>Therefore, \(Y\) represents total profit</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>Sometimes, random variables are <strong>combined</strong> in order to determine probabilities of events which involve both of the variables
        <ul>
            <li>Combining two variables essentially means you are just considering them both</li>
            <li>To find the measure of center, all you need to do is to add the means/expected values together
                <ul>
                    <li>\(\mu_{X+Y} = \mu_X + \mu_Y\)</li>
                    <li>This can be done for ANY two random variables</li>
                </ul>
            </li>
            <li>However, for obtaining measures of standard deviation, you need to be sure that the two variables are&nbsp;<strong>independent</strong>
                <ul>
                    <li>When you check this condition and therefore combine the standard deviations of the two variables, you need to&nbsp;<strong>add their variances and square root: </strong>$$\mathrm{\sigma}_{Z}^{2} = \mathrm{\sigma}_{X}^{2} + \mathrm{\sigma}_{Y}^{2}$$ $$ \sigma_Z = \sqrt{\mathrm{\sigma}_{X}^{2} + \mathrm{\sigma}_{Y}^{2}} $$
                        <ul>
                            <li>You must always add the variances, it doesn't matter if you are subtracting the random variables or adding them</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>Remember to keep in mind the steps of the process: be conscious of what operation to perform and in what order:
        <ul>
            <li>Know the difference between scaling and combining random variables
                <ul>
                    <li>When you need to represent the mean of the size of 5 eggs, each represented by the variable \(X\), you must be aware that the eggs are being combined, rather than scaled. Therefore, while the same thing happens to the mean, the standard deviation undergoes a different change; the variance of each \(X\) is being added together, and the square root taken at the end</li>
                </ul>
            </li>
        </ul>
    </li>
<?php endblock() ?>