<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 2 Notes
<?php endblock()?> 
<?php startblock('title') ?>
Transforming to Achieve Linearity
<?php endblock()?>

<?php startblock('notes') ?>
        <li>Non-linear data can somecdot be&nbsp;<strong>transformed</strong> to achieve linearity</li>
        <li>The most common methods for achieving linearity out of power models or exponential models involves using logarithms
            <ul>
                <li>A&nbsp;<strong>power model</strong> is in the form of \(y=ax^p\), where \(p\) is some arbitrary power
                    <ul>
                        <li>To get linear data, take the log of both sides: the steps that follow detail this approach: $$\log{}{y}=\log{}{(a \cdot x^p)}$$ $$\log{}{y} = \log{}{a} + p\log{}{x}$$</li>
                        <li>Now, you have a linear relationship between \(\log{}{x}\) and \(\log{}{y}\)
                            <ul>
                                <li>Therefore, if the model is a power model, plotting \(\log{}{x}\) against \(\log{}{y}\) should yield linear data</li>
                            </ul>
                        </li>
                        <li>To find a \(\hat{y}\), simply plug in the corresponding value for \(x\)</li>
                        <li>If you do linear regression upon the resulting function after the log of both sides has been taken, you can work backwards to find the true power model:
                            <ul>
                                <li>You start with the linear regression equation, accounting for the fact that you have taken the log of both the variables (\(p\) is the slope and \(a\) is the intercept, given by the calculator) $$\log{}{\hat{y}}=a+p\log{}{x}$$</li>
                                <li>Then, you can use log properties to work backwards: $$ 10^{\log{}{\hat{y}}}=10^{a+p\log{}{x}} $$ $$ \hat{y} = 10^{a} \cdot 10^{\log{}{x^p}} $$ $$ \hat{y} = 10^{a} \cdot x^{p} $$</li>
                                <li>Therefore, we can see that the slope given by linear regression ends up being the power in the power model</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>An&nbsp;<strong>exponential&nbsp;</strong><strong>model&nbsp;</strong>is one in the form \(y = a \cdot b^{x}\)
                    <ul>
                        <li>To get something linear, again, take the log of both sides and simplify: $$\log{}{y} = \log{(a \cdot b^{x})}$$ $$\log{}{y} = \log{}{a} + x \cdot \log{}{b}$$</li>
                        <li>We now have a clear linear relationship between \(x\) and \(\log{}{y}\)
                            <ul>
                                <li>To get linear data from an exponential model, plot \(x\) against \(\log{}{y}\)</li>
                            </ul>
                        </li>
                        <li>If you do a linear regression on the data you get after the transformation, after accounting for the fact that you took the log of \(y\), you can work backwards to find the exponential model: $$\log{}{\hat{y}} = a + bx $$ $$ \hat{y} = 10^{a} \cdot (10^{b})^{x} $$
                            <ul>
                                <li>Now, simply, plug in the values of \(a\) and \(b\) that the calculator gives you to complete the model</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><strong>Takeaways:</strong>&nbsp;
            <ul>
                <li>When you have non-linear data that still seems to follow a pattern, you have two options:
                    <ul>
                        <li>Plot the x-values against the log of the y-values: if this is linear, your model is exponential, and you have an equation you can work with</li>
                        <li>Plot the log of the x-values against the log of the y-values. If this is linear, your model is a power model, and, once again, you have a model you can work with</li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock()?>