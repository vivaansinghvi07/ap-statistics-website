<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 2 Notes
<?php endblock()?>
<?php startblock('title') ?>
      Introduction to Two-Variable Quantitative Data
<?php endblock()?>
<?php startblock('notes') ?>
        <li><strong>Explanatory&nbsp;</strong>variables help predict changes in&nbsp;<strong>response&nbsp;</strong>variables<br />
            <ul>
                <li>A.k.a&nbsp;<strong>independent&nbsp;</strong>and&nbsp;<strong>dependent&nbsp;</strong>variables</li>
                <li>Some explanatory variables&nbsp;<strong>cause</strong> change in the response variable while others simply have an&nbsp;<strong>association</strong>
                    <ul>
                        <li><strong>Causation&nbsp;</strong>vs&nbsp;<strong>correlation</strong></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>A <strong>scatterplot&nbsp;</strong>displays the relationship between these two variables
            <ul>
                <li><img class = "image" src = "../imgs/scatter.png"></li>
                <li>The explanatory variable goes on the x-axis, while the response variable goes on the y-axis</li>
                <li>Each individual appears as a point</li>
                <li>When describing one, you mention:
                    <ul>
                        <li><strong>Direction:&nbsp;</strong>is the pattern a positive or negative association?</li>
                        <li><strong>Form:</strong> are there curves? clusters?</li>
                        <li><strong>Strength:&nbsp;</strong>how strongly correlated are the data?</li>
                        <li><strong>Outliers:&nbsp;</strong>are there any points that seem to deviate from the general pattern?</li>
                        <li>"There is a strong, positive, linear association with no outliers"</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>One important measure of correlation is the&nbsp;<strong>r-coefficient</strong>
            <ul>
                <li>Both the response and explanatory variables must be quantitative&nbsp;</li>
                <li>Only applicable for finding the strength of&nbsp;<strong>linear</strong> relationships</li>
                <li>You don't need to know this, but \(r\) is formally found using $$r = \frac{1}{n-1}\sum{}^{}(\frac{x_i - \overline{x}}{s_x})(\frac{y_i - \overline{y}}{s_y})$$</li>
                <li>Between -1 and 1</li>
                <li>A value of larger magnitude represents stronger data</li>
                <li>Not&nbsp;<strong>resistant</strong>, and not a full summary of the data</li>
                <li>Note that this value does not imply causation, only the strength of the association</li>
                <li>The square of the correlation coefficient, \(r^2\), represents the percent of variation in the response variable that is explained by the value of the explanatory variable</li>
            </ul>
        </li>
<?php endblock()?>