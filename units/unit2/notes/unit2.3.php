<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 2 Notes
<?php endblock()?>  
<?php startblock('title') ?>
Density Curves and Normal Distributions
<?php endblock()?>

<?php startblock('notes') ?>
        <li>When exploring anything related to quantitative data, it is essential to do at least one of the following:&nbsp;
            <ul>
                <li>Always plot a graph
                    <ul>
                        <li>Analyze&nbsp;<strong>SECS</strong> (shape, extremes, center, spread)</li>
                    </ul>
                </li>
                <li>Find numerical summaries</li>
                <li>See if the data can be described by a smooth curve</li>
            </ul>
        </li>
        <li>A regular or symmetric distribution can be represented by a <strong>density curve</strong>
            <ul>
                <li><img class = "image" src = "../imgs/density.png"></li>
                <li>They are always on or above the x-axis</li>
                <li>They always have an area of 1 underneath the curve</li>
                <li>Outliers are generally not described</li>
                <li>The median is the&nbsp;<strong>equal areas&nbsp;point</strong> - the point where the area on either side is the same</li>
                <li>The mean is the&nbsp;<strong>balance point&nbsp;</strong>- if the curve were to be "balanced" on a needle and stay upright, it would be at this point
                    <ul>
                        <li>Note that the distance from the mean will affect where the balance point is because farther things weigh more</li>
                    </ul>
                </li>
                <li>When the curve is&nbsp;<strong>symmetric</strong>, the median and mean are equal
                    <ul>
                        <li>When the curve is&nbsp;<strong>skewed</strong>, the mean is pulled towards the longer tail</li>
                      <li><img class = "image" src = "../imgs/density-skew.png"></li>
                    </ul>
                </li>
                <li>This is idealized, meaning the sample means and standard deviations will almost never equal the true curve's mean and standard deviation</li>
            </ul>
        </li>
        <li>A&nbsp;<strong>normal curves</strong> are a special group of density curves which play a quintessential role in statistics
            <ul>
                <li><img class = "image" src = "../imgs/normal-curve.png"></li>
                <li>These are bell-shaped, symmetric, and unimodal (one peak)</li>
                <li>Completely described by just the mean and standard deviation
                    <ul>
                        <li>The standard deviation, \(\sigma\), represents spread</li>
                        <li>When you go one standard deviation below or above the center of the curve, you reach the inflection point of the curve - where the slope goes from increasing to decreasing or the other way around</li>
                    </ul>
                </li>
                <li>This is not applicable to all density curves</li>
            </ul>
        </li>
        <li><strong>Normal distributions&nbsp;</strong>are those represented by normal curves<br />
            <ul>
                <li>These often apply to things that have a consistent mean value, and can vary on either side
                    <ul>
                        <li>Examples: subway sandwich lengths, bird weights, diameter of a tennis ball</li>
                    </ul>
                </li>
                <li>Good approximations of some chance outcomes</li>
                <li>Many statistical inference procedures are based off it</li>
                <li>The <strong>68-95-99.7 Rule</strong>, also known as the&nbsp;<strong>empirical rule</strong>, suggests that for a normal density curve, the area under the curve within 1, 2, and 3 standard deviations are .68, .95, and .997 respectively
                    <ul>
                        <li>Only applies for normal distributions</li>
                        <li>For other distributions, the&nbsp;<strong>Chebyshev Inequality&nbsp;</strong>suggests that the proportions of observations within \(k\) standard deviations is at least \(1 - \frac{1}{k^2}\)</li>
                    </ul>
                </li>
                <li>It is important to remember that no model is 100% correct</li>
                <li>Standardizing a normal distribution gives the&nbsp;<strong>standard normal distribution</strong>&nbsp;
                    <ul>
                        <li>\(\mu\) = 0 , \(\sigma\) = 1</li>
                    </ul>
                </li>
                <li>When you have non-integer standard deviations, the empirical rule no longer works
                    <ul>
                        <li>The standard normal table gives area to the left of \(z\) for almost every value of \(z\) under the curve
                            <ul>
                                <li><img class = "image" src = "../imgs/table-a.png"></li>
                                <li>You can also work backwards to find \(z\) for any area</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Remember: the area above a single point is 0, as it is an infinitely narrow line</li>
                <li><strong>Calculator Tools:</strong>
                    <ul>
                        <li><strong>normalcdf()&nbsp;</strong>takes two bounds, \(\mu\) and \(\sigma\), and returns the area under the inputted value (does not have to be a z-score)&nbsp;</li>
                        <li><strong>invnorm()&nbsp;</strong>takes an area (between 0 and 1), &nbsp;\(\mu\), and \(\sigma\), and returns the value corresponding to that area (the area to the left of that value is equivalent to the inputted area)</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Assessing normality:&nbsp;
            <ul>
                <li>Plot the data using a histogram, dotplot, or other method, and look for the bell curve pattern</li>
                <li>See if the data follows the empirical rule</li>
                <li>Construct a&nbsp;<strong>normal probability plot:</strong>
                    <ul>
                        <li>1. Arrange the data points from smallest to largest and also record its percentile</li>
                        <li>2. Plot each observation against its expected \(z\) based on the percentile</li>
                        <li>3. If a straight line is present, it is likely normal
                            <ul>
                                <li>Do not be picky with this step - data is varying and will almost never show an exact pattern</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock()?>