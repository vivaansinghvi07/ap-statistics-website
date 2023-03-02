<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
    Unit 4 Notes
<?php endblock() ?>
<?php startblock('title') ?>
    Basic Probability
<?php endblock() ?>
<?php startblock('notes') ?>
        <li>The&nbsp;<strong>sample space (s)&nbsp;</strong>of a chance process is the set of all possible outcomes
            <ul>
                <li>A&nbsp;<strong>probability model&nbsp;</strong>is a description of some chance process
                    <ul>
                        <li><img class = "image" src = "../imgs/prob-model.png"></li>
                        <li>A sample space - list of all outcomes</li>
                        <li>A probability for each outcome</li>
                    </ul>
                </li>
                <li>For flipping a coin: heads (50%) and tails (50%)</li>
            </ul>
        </li>
        <li>An&nbsp;<strong>event&nbsp;</strong>is any collection of outcomes from some chance process
            <ul>
                <li>A subset of the sample space</li>
                <li>The <strong>probability</strong> of an event \(A\) is represented as \(P(A)\)&nbsp;
                    <ul>
                        <li>For example, \(A\) could represent an outcome in which you flip two heads in a row, or a tails and a heads</li>
                    </ul>
                </li>
                <li><strong>Mutually exclusive,</strong> or&nbsp;<strong>disjoint</strong>&nbsp;events are two events that cannot coincide at all - they both cannot occur at once
                    <ul>
                        <li><img class = "image" src = "../imgs/exclusive.png"></li>
                        <li>\(P(A \ \text{and} \  B) = 0\)&nbsp;</li>
                        <li>\(P(A \ \text{or} \  B) = P(A) + P(B)\)
                            <ul>
                                <li>This only applies for mutually exclusive events</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>The&nbsp;<strong>complement&nbsp;</strong>of an event is the opposite event
                    <ul>
                        <li>For example, if an event is flipping two heads in a row, its complement includes either flipping heads and tails, or two tails in a row</li>
                        <li>\(P(A^C) = 1 - P(A)\)</li>
                    </ul>
                </li>
                <li>Probability diagrams are helpful to visualize a sample space
                    <ul>
                        <li><img class = "image" src = "../imgs/venn.png">
                            <ul>
                                <li>Here, we can see that event \(A\) is reading USA Today and \(B\) is reading the New York Times</li>
                                <li>As you can see, the events are not mutually exclusive because the probability of them both happening is not zero</li>
                                <li>The space outside the circles represents the probability that neither of the events occur</li>
                            </ul>
                        </li>
                        <li>Helps make things more clear, as you can visualize what is happening</li>
                        <li>Generally, when solving probability problems, you should draw one</li>
                    </ul>
                </li>
                <li>Probabilities have specific notation which can represent the union or intersect of two events
                    <ul>
                        <li>\(P(A \cap B)\) represents the <strong>intersect</strong>&nbsp;of the two events&nbsp;
                            <ul>
                                <li>This represents the probability of \(A\) AND \(B\)</li>
                            </ul>
                        </li>
                        <li>\(P(A \cup B)\) represents the <strong>union&nbsp;</strong>of the two events
                            <ul>
                                <li>This represents the probability of \(A\) OR \(B\)
                                    <ul>
                                        <li>Also includes the probability of both of them happening</li>
                                    </ul>
                                </li>
                                <li>There is a special formula, called the <strong>general addition rule</strong> for determining the probability of a union of two events: $$P(A \cup B) = P(A) + P(B) - P(A \cap B)$$
                                    <ul>
                                        <li>The intersect is being subtracted so it is not doubly represented</li>
                                        <li>When two events are mutually exclusive, the intersect becomes zero and turns into the aforementioned formula for those events</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock() ?>