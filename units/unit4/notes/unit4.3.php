<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 4 Notes
<?php endblock() ?>
<?php startblock('title') ?>
      Conditional Probability
<?php endblock() ?>
<?php startblock('notes') ?>
        <li><strong>Conditional probability&nbsp;</strong>is the probability that an event happens given that another event already happened
            <ul>
                <li>Represented as \(P(A | B)\) - read as: the probability of event \(A\) given \(B\)</li>
                <li>There are some special formulas with conditional probability:
                    <ul>
                        <li>\(P(A \cap B) = P(A) \cdot P(B | A)\)
                            <ul>
                                <li>The probability that two events will occur is the probability that the first occurs times the probability that the second occurs given that the first already occurred</li>
                            </ul>
                        </li>
                        <li>\(P(A | B) = \frac{P(A \cap B)}{P(B)}\)
                            <ul>
                                <li>The probability of \(A\) given \(B\) is the probability that they both occur divided by the probability of \(B\)</li>
                                <li>Because you find the probability of them both happening, and you are trying to find the probability of \(A\) given \(B\), you divide by the probability of \(B\), so that you essentially treat it as it already happened</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>A&nbsp;<strong>tree diagram</strong>&nbsp;is very helpful when looking at probability sequences, especially conditionals
            <ul>
                <li><img class = "image" src = "../imgs/tree.png"></li>
                <li>In this image, the complement of the events are represented by the event with a line over it
                    <ul>
                        <li>\(P(A^C) = P(\overline{A})\)</li>
                    </ul>
                </li>
                <li>In a tree diagram, each branch off a 'node' in the tree represents a probability of an event, given that the event represented by the node has already occurred
                    <ul>
                        <li>Additionally, all the branches off a node going to the right add up to 1, as all the probabilities add to one</li>
                    </ul>
                </li>
                <li>To get the probability any node, simply multiply the probability of all the branches leading up to the node
                    <ul>
                        <li>If you have a conditional probability, you can simply start off of the node that represents the given event</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><strong>Independence&nbsp;</strong>is an important thing to look for in statistics
            <ul>
                <li>This is when the outcome of a variable does not affect the outcome of another</li>
                <li>When two events are independent, the probability of one given another is equal to the it's standalone probability
                    <ul>
                        <li>\(P(A | B) = P(A)\)</li>
                    </ul>
                </li>
                <li>Mutually exclusive events are not independent, because when you know one to be true, you know the other one to be impossible</li>
                <li>When two events are independent, you can multiply their probabilities to find the probability of their intersect
                    <ul>
                        <li>\(P(A) \cdot P(B) = P(A \cap B)\)</li>
                        <li>Remember, this is only applicable when the two events are independent</li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock() ?>