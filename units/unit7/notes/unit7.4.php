<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 7 Notes
<?php endblock() ?>

<?php startblock('title') ?>
  Type I and Type II Errors
<?php endblock() ?>

<?php startblock('notes') ?>
    <li>There are two possible errors you may make when doing a hypothesis test
        <ul>
            <li>A&nbsp;<strong>Type I Error&nbsp;</strong>is when you determine the claim to be false (i.e. you reject the null hypothesis) even though it is actually true
                <ul>
                    <li>Generally the more serious issue</li>
                    <li>Basically a <strong>false positive</strong></li>
                </ul>
            </li>
            <li>A&nbsp;<strong>Type II Error</strong> is the opposite - it is a&nbsp;<strong>false negative</strong>
                <ul>
                    <li>You don't reject the null hypothesis, but in reality, it was untrue all along</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>The&nbsp;<strong>power</strong> of a test is essentially the probability that the null hypothesis is successfully rejected
        <ul>
            <li>1-power is the probability that you do not reject the null hypothesis, which is a&nbsp;<strong>Type II Error</strong>&nbsp;</li>
            <li><img class = "image" src = "../imgs/errors.png"></li>
            <li>As the probability of a Type I Error increases, the probability of a Type II Error decreases
                <ul>
                    <li>The significance level is the probability of a Type I Error</li>
                </ul>
            </li>
            <li>You can increase power by increasing significance level or increasing sample size</li>
        </ul>
    </li>
<?php endblock() ?>
    