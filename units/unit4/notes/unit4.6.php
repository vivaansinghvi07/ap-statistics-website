<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/calculators.php' ?>

<?php startblock('header') ?>
    Unit 4 Notes
<?php endblock() ?>

<?php startblock('title') ?>
    Binomial and Geometric Random Variables
<?php endblock() ?>

<?php startblock('scripts') ?>
    <script src = "scripts/unit4.6.js"></script>
<?php endblock() ?>

<?php startblock('settings')?>
      <select id = "type" class="form-select" aria-label="Default select example" onchange = "change(); return false;">
        <option selected value="blank">Select the type of random variable</option>
        <option value="b">Binomial Random Variable</option>
        <option value="g">Geometric Random Variable</option>
      </select>
<?php endblock() ?>

<?php startblock('output') ?>    
    <div id="binom" hidden="hidden">
        <ul class = "notes">
            <li>A&nbsp;<strong>binomial random variable&nbsp;</strong>represents one that has two possible outcomes
                <ul>
                    <li>The probabilities of the outcomes do not have to each equal 50%</li>
                    <li>When detecting a <strong>binomial setting</strong>, use the acronym <strong>BINS:</strong>
                        <ul>
                            <li><strong>B</strong>inary? The possible outcomes of each repetition can be classified as a "success" or "failure"
                                <ul>
                                    <li>Rolling a dice and looking for a 1: you classify the number 1 as a success and every other number as a failure</li>
                                </ul>
                            </li>
                            <li><strong>I</strong>ndependent? The repetitions must be independent of one another - the outcome of one must not affect the outcome of the other</li>
                            <li><strong>N</strong>umber? The number \(n\) of trials must be fixed before the repetitions are done</li>
                            <li><strong>S</strong>uccess? The probability of a success must be constant across trials</li>
                        </ul>
                    </li>
                    <li>The count \(X\) of successes in a binomial setting is the <strong>binomial random variable</strong></li>
                    <li>These have a&nbsp;<strong>binomial distribution</strong>, fully represented by only two numbers:
                        <ul>
                            <li>\(n\) is the number of trials/repetitions that happen</li>
                            <li>\(p\) is the probability of a success</li>
                        </ul>
                    </li>
                    <li>The&nbsp;<strong>probability </strong>of a single outcome is the probability of a success to the power of the number of successes multiplied by the probability of a failure to the power of the number of failures, all multiplied by the number of arrangements
                        <ul>
                            <li>When the outcome is \(k\) successes: $$P(X = k) = \text{number of arrangements} \cdot {(p)^k}{(1-p)^{n-k}}$$</li>
                            <li>For example, when \(p = 0.40\) and \(n=5\), the probability that there are 3 successes is:
                                <ul>
                                    <li>\(P(X = 3) = \text{number of arrangements} \cdot {(0.40)^3}{(1-0.40)^2}\)</li>
                                </ul>
                            </li>
                            <li>The number of arrangements is also known as the&nbsp;<strong>binomial coefficient:</strong>
                                <ul>
                                    <li>Represented by \(\binom{n}{k}\)
                                        <ul>
                                            <li>Read as "n choose k" - this is the number of the different ways you can arrange the values so that \(k\) is still met</li>
                                        </ul>
                                    </li>
                                    <li>To find this, you need to know two things: the number of expected successes \(k\) and the count \(n\): $$\binom{n}{k} = \frac{n!}{k! \cdot (n-k)!}$$
                                        <ul>
                                            <li>Exclamation marks represent a <a class = "notelink" target = "_blank" href = "https://en.wikipedia.org/wiki/Factorial">factorial</a></li>
                                        </ul>
                                    </li>
                                    <li>On a calculator, you can find this using the&nbsp;<strong>nCr&nbsp;</strong>command</li>
                                </ul>
                            </li>
                            <li>Therefore, the probability that there will be \(k\) successes is: $$P(X = k) = \binom{n}{k} {(p)^k}{(1-p)^{n-k}}$$</li>
                            <li>You can calculate probabilities on a calculator using the following commands:
                                <ul>
                                    <li><strong>binompdf()&nbsp;</strong>gives you the probability of only the outcome with the number of inputted successes, provided you can input \(n\) and \(p\)</li>
                                    <li><strong>binomcdf()</strong>, depending on the calculator, gives the probability that the outcomes are in a certain range
                                        <ul>
                                            <li>On the TI-84, it outputs the number of outcomes that have success counts less than or equal to the inputted value</li>
                                            <li>Different on other calculators - make sure to get familiar with your own</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>The <strong>expected value</strong> of a binomial distribution is simply \(n \cdot p\) - the number of trials times the probability of a success
                        <ul>
                            <li>Conversely, you can create a list of all the possible outcomes and their corresponding probabilities, as shown with <a href="/units/unit4/notes/unit4.4.html" target="_blank" class = "notelink" >discrete random variables</a>
                                <ul>
                                    <li>\(\sum{{x_i}{p_i}}\)</li>
                                    <li>This is a lengthy process but if you are given it you might as well use it</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>The&nbsp;<strong>standard deviation&nbsp;</strong>of a binomial distribution is represented by \(\sqrt{np(1-p)}\)</li>
                    <li>Binomial variables also play a critical role in statistical hypothesis testing, which will be covered in later units</li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="geom" hidden="hidden">
      <ul class="notes">
    <li>A&nbsp;<strong>geometric random variable</strong> essentially involves repeating a chance process UNTIL a success is observed<strong></strong>
        <ul>
            <li>For example, rolling a die until you get a 1</li>
            <li>One of the key differences between this an a binomial random variable is that you do not have a set number of trials</li>
            <li>A&nbsp;<strong>geometric setting&nbsp;</strong>is present under the following conditions
                <ul>
                    <li>The trials are&nbsp;<strong>independent&nbsp;</strong>of one another</li>
                    <li>There is a constant probability of <strong>success</strong></li>
                    <li>There is a clear&nbsp;<strong>binary</strong> difference between success and failure</li>
                    <li>Trials are&nbsp;<strong>REPEATED</strong> until a success
                        <ul>
                            <li>No set amount</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>A&nbsp;<strong>geometric random variable </strong>can be defined by only one thing: \(p\), the probability of a success
                <ul>
                    <li>The possible outcomes that a geometric random variable takes are the number of trials it takes for a success
                        <ul>
                            <li>Therefore, it is: 1, 2, 3, 4, ...</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>To calculate the <strong>probability</strong> of requiring exactly \(k\) trials, you must use the following formula: $$ P(X = k) = {(1-p)^{k-1}} \cdot p $$
                <ul>
                    <li>This basically means that you will need to get a failure \(k-1\) times so that you can get a success on the \(k^\text{th}\) time</li>
                    <li>To find the probability of needing AT LEAST \(k\) trials, you can do the following: $$ P(X \ge k) = (1-p)^{k-1} $$
                        <ul>
                            <li>This is because you will need to fail at least \(k-1\) times so that the earliest you can stop is at \(k\)</li>
                        </ul>
                    </li>
                    <li>To find the probability of needing AT MOST \(k\) trials, you can do: $$ P(X \le k) = 1 - (p-1)^k $$
                        <ul>
                            <li>This essentially finds the the probability that you will not need at least \(k + 1\) trials</li>
                        </ul>
                    </li>
                    <li>Probability can also be found using calculator tools:
                        <ul>
                            <li><strong>geometpdf()/geompdf():&nbsp;</strong>Takes a value \(p\) and a value \(k\) (the number of trials) and returns the probability that <strong>exactly</strong> \(k\) trials will be needed
                                <ul>
                                    <li>\(P(X = k)\)</li>
                                </ul>
                            </li>
                            <li><strong>gemoetcdf()/geomcdf():&nbsp;</strong>Takes a value \(p\) and a value \(k\) and returns the probability that you will need that many trials or <strong>less</strong>
                                <ul>
                                    <li>\(P(X \le k)\)</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>A&nbsp;<strong>geometric distribution&nbsp;</strong>has a peak at 1 and is heavily right skewed
                <ul>
                    <li>The&nbsp;<strong>expected value&nbsp;</strong>of a geometric variable is just \(\frac{1}{p}\)</li>
                    <li>The&nbsp;<strong>standard deviation&nbsp;</strong>is \(\sqrt{\frac{1-p}{p^2}}\)</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
    </div>
<?php endblock() ?>