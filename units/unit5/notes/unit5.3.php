<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 5 Notes
<?php endblock() ?>
<?php startblock('title') ?>
      Sample Distributions For Means
<?php endblock() ?>
<?php startblock('notes') ?>
        <li>A&nbsp;<strong>sample mean</strong>, represented by \(\hat{x}\), is simply the average of a certain value within a sample
            <ul>
                <li>The average height of a sample of 5 men</li>
            </ul>
        </li>
        <li>The&nbsp;<strong>sampling distribution&nbsp;</strong>is formed when you take many samples from the population of the same size \(n\), calculate the sample mean, and plot it for each sample
            <ul>
                <li>For reference, let's call the population standard deviation \(\sigma\) and the population mean \(\mu\)</li>
                <li>Similarly to the sample proportion, it also has a few properties which depend on certain conditions
                    <ul>
                        <li><strong>Center:</strong> the&nbsp;<strong>mean</strong>&nbsp;of a sampling distribution for a mean is simply equal to the population mean
                            <ul>
                                <li>\(\mu\ = \mu_{\overline{x}}\)</li>
                                <li>This is only if the samples are truly random - the sample mean must be an&nbsp;<strong>unbiased estimator&nbsp;</strong>of the population mean</li>
                            </ul>
                        </li>
                        <li><strong>Spread:</strong> the <strong>standard deviation </strong>of a sampling distribution for a mean with sample size \(n\) is simply \(\frac{\sigma}{\sqrt{n}}\)
                            <ul>
                                <li>This only holds true when the&nbsp;<strong>10% Condition</strong> is met: the sample size \(n\) must be less than one tenth of the population size \(N\)</li>
                                <li>This is represented by \(\sigma_{\overline{x}}\)</li>
                            </ul>
                        </li>
                        <li><strong>Shape:</strong> the sampling distribution is approximated to a normal distribution only if the <strong>Central Limit Theorem's&nbsp;</strong>condition is met:<br />
                            <ul>
                                <li>The sample size \(n\) must be greater or equal to 30 (\(n \ge 30\)) for a normal approximation to be used</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Again, once you are able to approximate the sampling distribution to a known value, you can perform operations based on probability with a normal distribution, which is easy to do in statistics</li>
<?php endblock() ?>