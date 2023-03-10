<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
    Unit 6 Notes
<?php endblock() ?>

<?php startblock('title') ?>
      Introduction to Confidence Intervals
<?php endblock() ?>

<?php startblock('notes') ?>
        <li>What if you don't know the population mean and want to estimate it?
            <ul>
                <li>You will estimate the population mean using a sample mean</li>
                <li>A&nbsp;<strong>point estimate&nbsp;</strong>is a statistic that is used to estimate a population parameter
                    <ul>
                        <li>Recall that a&nbsp;<strong>statistic&nbsp;</strong>is a detail about a sample, while a&nbsp;<strong>parameter</strong> is a detail about a population</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The idea of a&nbsp;<strong>confidence interval</strong> is to create an interval, using the sampling distribution of the population, but instead centering it around the sample mean/proportion
            <ul>
                <li><img class = "image" src = "../imgs/confidence.png">
                    <ul>
                        <li>Let's consider the mean of this sampling distribution to be the population mean</li>
                        <li>As you can see, it encompasses from 90% to 99% of possible sample means</li>
                    </ul>
                </li>
                <li>Therefore, if you center the sampling distribution around the sample mean, the same percent of intervals&nbsp;<strong>will contain the true population mean</strong>
                    <ul>
                        <li>Obviously, you can also do this for proportions, but for the sake of simplicity, I will refer to everything as a mean in this section of the notes</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The&nbsp;<strong>confidence level&nbsp;</strong>is how confident you are that the interval generated will contain the true parameter
            <ul>
                <li>To interpret a 95% confidence level:&nbsp;<br />
                    <ul>
                        <li>If many sample were taken, and had confidence intervals generated from them,&nbsp;<strong>95%</strong> of these intervals will contain the true parameter</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>A&nbsp;<strong>C% confidence interval </strong>gives a value with a margin of error that has plausible values for the parameter within it
            <ul>
                <li>The&nbsp;<strong>margin of error</strong> is calculated using standard deviations, which will be covered in the next two notes</li>
                <li>In the following form: 
                  $$ \text{interval} = \text{point estimate} \pm \text{margin of error} $$
                </li>
            </ul>
        </li>
        <li>To interpret a confidence interval, you say:
            <ul>
                <li>We are&nbsp;<strong>c% confident&nbsp;</strong>that the interval from ____ to ____ captures the true value of ____.</li>
            </ul>
        </li>
        <li>To calculate one, you must find the&nbsp;<strong>critical value</strong>, which is usually written in the form \(t^*\) or \(z^*\) (more on these later)
            <ul>
                <li>This is a multiplier that you scale the standard deviation by to find the margin of error</li>
                <li>Higher confidence levels have higher critical values, to allow for a larger margin of error
                    <ul>
                        <li>If you have a larger margin of error, you can be more sure that the interval contains the parameter</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Therefore, the margin of error is your critical value times the standard deviation of the sampling distribution
            <ul>
                <li>You must be sure that you data are truly randomly chosen
                  <ul>
                    <li>
                      This is because the margin of error does not acccount for systematic error, only random variation
                    </li>
                  </ul>
                </li>
                <li>Additionally, as you increase the sample size, your standard deviation decreases, so your margin decreases as well</li>
            </ul>
        </li>
<?php endblock() ?>