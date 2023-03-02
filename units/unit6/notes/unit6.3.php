<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 6 Notes
<?php endblock() ?>

<?php startblock('title') ?>
      Confidence Intervals for Means
<?php endblock() ?>

<?php startblock('notes') ?>
        <li>When constructing a confidence interval for means, you must again check three conditions:
            <ol style="list-style-type: decimal;">
                <li>The sample must be taken randomly (from an SRS)</li>
                <li>The population size must be at least 10 times the sample size
                    <ul style="list-style-type: disc;">
                        <li>\(N \ge 10n\)</li>
                    </ul>
                </li>
                <li>You must be able to determine your sampling distribution is approximately normal
                    <ul>
                        <li>According to the Central Limit Theorem, if your sample size is 30 or greater, your sampling distribution will be normal</li>
                        <li>If the above condition is not met, you can use a <a class = "notelink" href = "/units/unit2/calculators/npp.html">normal probability plot</a> to analyze the linearity of your data</li>
                    </ul>
                </li>
            </ol>
        </li>
        <li>When trying to create a sampling distribution for means, the following problem arises: How do you find the standard deviation of the population?
            <ul>
                <li>When we were working with proportions, we could estimate it from just knowing the sample proportion</li>
                <li>However, there is no calculation we can do for means; our best estimate is the standard deviation of the sample, \(s_\overline{x}\)</li>
                <li>Therefore, we assume the standard deviation in the interval to be the&nbsp;<strong>standard error of the sample mean</strong>
                    <ul>
                        <li>\(SE_\overline{x} = \frac{s_x}{\sqrt{n}}\)
                            <ul>
                                <li>This formula takes the standard deviation of the sample, and divides it by the square root of the sample size to estimate the standard error of the sample mean</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Because we are using the standard error of the sample mean, we need to use a&nbsp;<strong>t-distribution</strong> to calculate the&nbsp;<strong>critical value</strong>&nbsp;rather than a normal distribution as we did for proportions
            <ul>
                <li>&nbsp;A t-distribution looks similar to a normal distribution, but has much longer tails
                    <ul>
                        <li>Always has a center of 0 - generally not moved or transformed much as normal distributions are</li>
                        <li>As you increase the sample size, the t-distribution approaches the standard normal curve</li>
                    </ul>
                </li>
                <li><img class = "image" src = "../imgs/t-vs-normal.png"></li>
                <li>Recall that when we calculated the <a class = "notelink" target="_blank" href = "/units/unit2/notes/unit2.2.hmtl">z-score</a>, we did something like the following: \(z = \frac{\overline{x} - \mu_\overline{x}}{\sigma_x / \sqrt{n}}\)
                    <ul>
                        <li>\(\sigma_x / \sqrt{n}\) can also be represented as \(\sigma_\overline{x}\), as we divide the population standard deviation by the square root of \(n\) to find the sampling distribution's standard deviation</li>
                        <li>To find the t-score, we do this: \(t = \frac{\overline{x} - \mu_\overline{x}}{s_x / \sqrt{n}}\)
                            <ul>
                                <li>This is not used much for confidence intervals, but is used in the next section</li>
                            </ul>
                        </li>
                        <li>All we did is replace the population standard deviation with the sample standard deviation, but when we do this, the sample standard deviation can vary, causing the longer tails</li>
                    </ul>
                </li>
                <li>When the sample size is \(n\), we need to use a t-distribution with&nbsp;<strong>degrees of freedom&nbsp;</strong>\(n-1\)
                    <ul>
                        <li>Similar to with proportions, we need to find the area of one of these tails
                            <ul>
                                <li>We use the function&nbsp;<strong>invT(df: \(n-1\), value: \(a\))</strong> on the calculator to find the area under the curve at \(a\) or below
                                    <ul>
                                        <li>Recall that \(a\) represents the length of one of the tails, for which directions were given on the <a class = "notelink" target="_blank" href = "unit6.2.html">previous page</a> on its calculation</li>
                                        <li>You also do not need to add a mean or standard deviation, as this function simply gives you critical values</li>
                                        <li>You can also use&nbsp;<strong>Table C</strong> to find t-values, but it is lengthy and technology does it much faster</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>The critical value represented by a t-distribution is written as \(t^*\)</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Therefore, a confidence interval for a population mean given a sample mean \(\overline{x}\) and sample standard deviation \(s_x\) is: $$ \text{interval} = \overline{x} + t^* \cdot \frac{s_x}{\sqrt{n}} $$</li>
        <li>The previous approach for solving for sample size or confidence level is somewhat problematic now that we use \(s_x\), which is unknown to us, and \(t^*\), which itself depends on the sample size
            <ul>
                <li>The margin of error is: $$ ME = t^* \cdot \frac{s_x}{\sqrt{n}} $$</li>
                <li>What we can do is&nbsp;<strong>estimate the population standard deviation</strong> by choosing a reasonable value from a similar study
                    <ul>
                        <li>Therefore, we can pretend that we use a z-score, and our new equation becomes: $$ ME = z^* \cdot \frac{\sigma}{\sqrt{n}} $$
                            <ul>
                                <li>Now, we can solve as detailed in the bottom of the notes for proportions <a class = "notelink" target="_blank" href = "unit6.2.html">here</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock() ?>