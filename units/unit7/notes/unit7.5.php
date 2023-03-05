<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 7 Notes
<?php endblock() ?>

<?php startblock('title') ?>
  Hypothesis Testing for Two Variables
<?php endblock() ?>

<?php startblock('notes') ?>
    <li>Often, you will want to see if two variables are the same, or different
        <ul>
            <li>Here, you find the difference between the two variables and claim it to be 0<li>
        </ul>
    </li>
    <li>Therefore, your sample mean will be the difference between the two values, and your standard deviation will be the combination of the standard deviations of each variable's sampling distribution
        <ul>
            <li>\(\sigma_{\hat{p}_1 - \hat{p}_2} = \sqrt{\frac{\hat{p}_1 (1 - \hat{p}_1)}{n_1} + \frac{\hat{p}_2 (1 - \hat{p}_2)}{n_2}}\)</li>
            <li>\(\sigma_{\overline{x}_1 - \overline{x}_2} = \sqrt{\frac{s_{x_1}}{n_1} + \frac{s_{x_2}}{n_2}}\)</li>
        </ul>
    </li>
    <li>Now that you have the standard deviation of the sampling distribution, and the sample mean, you can run a hypothesis test. For tests for means, assume your degrees of freedom to be that of the smaller sample size</li>
<?php endblock() ?>