<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
  Unit 7 Notes
<?php endblock() ?>

<?php startblock('title') ?>
      Significance Testing For Means
<?php endblock() ?>
    
<?php startblock('notes') ?>
        <li>The conditions for conducting a hypothesis test for means are as follows:
            <ul>
                <li><strong>Random Sample:</strong> The sample must be truly random</li>
                <li><strong>10% Condition:</strong> The population size \(N\) must be at least 10 times the sample size \(n\)</li>
                <li><strong>Normal Data:</strong>&nbsp;
                    <ul>
                        <li>The&nbsp;<strong>Central Limit Theorem&nbsp;</strong>states that if the sample size is greater than 30, the sampling distribution will be normal</li>
                      <li>If this is not the case, you can use a <a class="notelink" href="/units/unit2/calculators/npp.html">normal probability plot</a> to determine this</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Again, you must use a&nbsp;<strong>t-distribution&nbsp;</strong>instead of a normal distribution, because the standard deviation of the sampling distribution cannot be determined, even given a claimed \(\mu\)
            <ul>
                <li>Therefore, your&nbsp;test statistic will be: $$ t = \frac{\overline{x} - \mu_\overline{x}}{\frac{s_x}{\sqrt{n}}} $$</li>
                <li>To find area, you can use&nbsp;<strong>tCdf()</strong> function on your calculator, entering correct degrees of freedom (\(n-1\)) and value(s)
                    <ul>
                        <li>Keep in mind which direction your alternate hypothesis is testing</li>
                        <li>The <a href = unit7.2.html class = "notelink">previous page</a> elaborates more on this</li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock() ?>