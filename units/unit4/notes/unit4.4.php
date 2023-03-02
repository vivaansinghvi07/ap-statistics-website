<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 4 Notes
<?php endblock() ?>
<?php startblock('title') ?>
Random Variables
<?php endblock() ?>
<?php startblock('notes') ?>
        <li>A <strong>random variable&nbsp;</strong>\(X\) represents the outcome of a random chance process
            <ul>
                <li>For example, when tossing coins, you would assign \(X\) to be the number of heads tossed (or the number of tails tossed)&nbsp;</li>
                <li>Random variables are represented by a probability distribution</li>
                <li>There are two types of random variables:</li>
            </ul>
        </li>
        <li>A&nbsp;<strong>discrete&nbsp;</strong>random variables only takes certain values as its possible outcomes
            <ul>
                <li>For example, if you toss 4 coins, the variable's possible values are 0, 1, 2, 3, or 4
                    <ul>
                        <li>There can never be anything in between because you can never toss a fraction of a coin</li>
                    </ul>
                </li>
                <li>Discrete random variables are represented by a list of each outcome and the probability of that outcome
                    <ul>
                        <li><img class = "image" src = "../imgs/discrete.png"></li>
                        <li>The sum of the probabilities has to be 1</li>
                        <li>No single probability can be less than 0 or greater than 1</li>
                        <li>You can also convert this into a simple graph with the y-axis representing probability and the x-axis representing each numerical outcome</li>
                    </ul>
                </li>
                <li>To find the&nbsp;<strong>mean</strong>, or <strong>expected value</strong>&nbsp;of a discrete random variable, \(X\), \(\mu_X\), is found by taking the average of all the values while also taking into account their respective probabilities
                    <ul>
                        <li>You must take the sum of all the outcomes multiplied by their probabilities</li>
                        <li>If any outcome is represented by \(x_i\), and its corresponding probability is \(p_i\), then the expected value is: $$ E(X) = \mu_X = \sum{{x_i}{p_i}} $$</li>
                        <li>This does not have to be a possible outcome, as it simply represents the average value over many repetitions</li>
                    </ul>
                </li>
                <li>To find the <strong>standard deviation&nbsp;</strong>of a discrete random variable, you must first find the&nbsp;<strong>variance&nbsp;</strong>of the random variable by taking the sum of the squared deviations multiplied by their respective probabilities
                    <ul>
                        <li>With variance being defined as \(\mathrm{\sigma}_{X}^{2}\), it is equal to: $$ \mathrm{\sigma}_{X}^{2} = \sum{{(x_i - \mu_X)^2}{p_i}} $$</li>
                        <li>To find the standard deviation, simply square root the variance:&nbsp;<br />
                            <ul>
                                <li>\(\sigma_X = \sqrt{\mathrm{\sigma}_{X}^{2}}\)</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>To analyze one on the calculator, in the stats list section, dedicate one list to all the possible outcomes, and the next list to their corresponding probabilities
                    <ul>
                        <li>Then, perform one-variable statistics on the list of outcomes, using the list of probabilities as a frequency list</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>You can also have&nbsp;<strong>continuous random variables</strong>&nbsp;
            <ul>
                <li>The probability distribution of a continuous random variable can be represented by a density curve
                    <ul>
                        <li><img class = "image" src = "../imgs/density-cont.png"></li>
                        <li>The area under the curve always totals to one</li>
                    </ul>
                </li>
                <li>Since any probability of any event is represented by the area under the curve, you CANNOT find the probability of a single value
                    <ul>
                        <li>This is because the width of the curve at that value will be 0, so even though the curve may have an apparent height, the area will compute to be 0</li>
                        <li>Therefore, when looking at probabilities of events, you must take an interval of possible values<br />
                            <ul>
                                <li>You would make a statement such as:&nbsp;\(P(a \lt X \lt b)\), where \(a\) and \(b\) are just arbitrary chosen values</li>
                            </ul>
                        </li>
                        <li><img class = "image" src = "../imgs/density-prob.png"></li>
                        <li>Note: because of this, \(P(a \lt X \lt b) = P(a \le X \le b)\)</li>
                    </ul>
                </li>
                <li>The&nbsp;<strong>mean&nbsp;</strong>is, as aforementioned in <a class = "notelink" href="/units/unit2/notes/unit2.3.html" target="_blank">Unit 2</a>, the balance point of the distribution</li>
                <li>If the curve is not a normal distribution, calculation of the&nbsp;<strong>standard deviation&nbsp;</strong>requires advanced math to find - not something we can or need to do</li>
            </ul>
        </li>
<?php endblock() ?>