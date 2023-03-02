<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>

<?php startblock('unit') ?>
Unit 2 Notes
<?php endblock()?>
<?php startblock('title') ?>
Assessing Linearity
<?php endblock()?>

<?php startblock('notes') ?>
        <li>A&nbsp;<strong>regression line</strong> is essentially a summary of the relationship between two variables
            <ul>
                <li><img class = "image" src = "../imgs/regression.png"></li>
                <li>\(\hat{y} = a + bx\) is the structure of a general regression equation
                    <ul>
                        <li>\(\hat{y}\) represents the predicted response variable based on an inputted explanatory variable&nbsp;</li>
                        <li>\(a\) represents the y-intercept
                            <ul>
                                <li>"When the explanatory variable is zero, the response is predicted to be \(a\)"</li>
                            </ul>
                        </li>
                        <li>\(b\) represents the slope
                            <ul>
                                <li>On average, for every one unit of increase in the explanatory variable, the response variable will increase/decrease by approximately \(b\)</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>The <strong>residual&nbsp;</strong>of each x-value is its corresponding y-value minus the regression line's predicted y-value
                    <ul>
                        <li>\(y_i - \hat{y} = \text{residual}\)</li>
                        <li>The&nbsp;<strong>least-squares regression line</strong> minimizes the sum of the squared residuals
                            <ul>
                                <li>Also know as the <strong>line of best fit</strong></li>
                            </ul>
                        </li>
                        <li>A <strong>residual plot</strong> is made when you plot each x-value against its residual
                            <ul>
                                <li><img class = "image" src = "../imgs/residual.png"></li>
                                <li>The data should be centered around zero</li>
                                <li>Linear data should result in a a seemingly random, scattered residual plot. If an obvious pattern is present, the data is likely not linear</li>
                                <li>The&nbsp;<strong>typical prediction error</strong> is the standard deviation of the residuals: $$s = \sqrt{\frac{\sum{}^{}(\text{residuals})^2}{n-2}}$$</li>
                                <li>The aforementioned \(r^2\) is also called the&nbsp;<strong>coefficient of determination,&nbsp;</strong>found using: $$r^2 = 1 - \frac{\sum{}^{}(\text{residuals})^2}{\sum{}^{}(y_i-\hat{y})^2}$$
                                    <ul>
                                        <li>Represents the percent of variation in the response variable that is explained by the explanatory variable</li>
                                    </ul>
                                </li>
                                <li>Officially, the least-squares regression line is found by the following: $$b = r\frac{s_y}{s_x},\ a = \overline{y}-b\overline{x}, \ \hat{y} = bx + a$$
                                    <ul>
                                        <li>\(s_x\) and \(s_y\) represent the standard deviation of each variable</li>
                                        <li>\(\overline{x}\) and \(\overline{y}\) represent the mean of each variable</li>
                                    </ul>
                                </li>
                                <li>NOTE: YOU DO NOT NEED TO KNOW THESE EQUATIONS
                                  <ul>
                                    <li>If you need to know any of the values, it will be given to you or you can use your calculator</li>
                                  </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>There is a distinction between an&nbsp;<strong>outlier&nbsp;</strong>and an&nbsp;<strong>influential point</strong>
                    <ul>
                        <li>An&nbsp;<strong>outlier&nbsp;</strong>is simply something that lies outside the general data trend - has a large residual</li>
                        <li>An&nbsp;<strong>influential point&nbsp;</strong>is one with an extreme \(x\); these greatly affect the least-squares regression line
                            <ul>
                                <li>Pulls the line towards itself</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Steps for analyzing linearity:
            <ul>
                <li>1. Make a scatterplot, look for a general pattern</li>
                <li>2. Find a least-squares regression line (using technology or given) and analyze \(r\) and \(r^2\)</li>
                <li>3. Plot a residual plot and look for the absence of a general pattern</li>
            </ul>
        </li>
<?php endblock()?>