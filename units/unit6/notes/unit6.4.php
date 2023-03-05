<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
    Unit 6 Notes
<?php endblock() ?>

<?php startblock('title') ?>
    Confidence Intervals for Two Samples
<?php endblock() ?>

<?php startblock('notes') ?>
    <li>Sometimes, you want to determine the difference between two samples</li>
    <li>In this case, you can determine the point estimate to be the difference of the means
        <ul>
            <li>\(\text{point estimate} = \overline{x}_1 - \overline{x}_2\)</li>
            <li>\(\text{point estimate} = \hat{p}_1 - \hat{p}_2\)</li>
        </ul> 
    </li>
    <li>Your standard deviation will simply be the combination of the standard deviations of the two variables
        <ul>
            <li>\(\sigma_{\hat{p}_1 - \hat{p}_2} = \sqrt{\frac{\hat{p}_1 (1 - \hat{p}_1)}{n_1} + \frac{\hat{p}_2 (1 - \hat{p}_2)}{n_2}}\)</li>
            <li>\(\sigma_{\overline{x}_1 - \overline{x}_2} = \sqrt{\frac{s_{x_1}}{n_1} + \frac{s_{x_2}}{n_2}}\)</li>
        </ul>
    </li>
    <li>You can use the <a href = "/units/unit4/calculators/combinevar.php" class = "notelink">combine random variables</a> calculator to find this (and the mean)
        <ul>
            <li>Note that if you do this, you will need to enter one of the means as a negative</li>
            <li>You will also have to calculate the individual standard deviations yourself</li>
            <li>Now, you can calculate your confidence interval. Note that for intervals for means, the critical value uses the degrees of freedom of the smaller sample</li>
        </ul>
    </li>
    <li>For the sake of time, this website does not have a calculator to do this</li>
<?php endblock() ?>