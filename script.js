function evalProbability(str, output) {
    try {
        // splits the string based on if there is a slash
        var num = str.split("/");

        // makes sure someone didnt put a lot of fractions
        if (num.length > 2) {
            output.innerHTML = "Don't stack fractions!";
            return "q";
        }

        // checks if it was left blank
        else if (num[0] === "") {
            output.innerHTML  = "Please don't leave fields blank!";
            return "q";
        }

        else {
            // decimal value if fraction; number if just normal
            var out = num.length === 2 ? parseFloat(num[0]) / parseFloat(num[1]) : parseFloat(num[0]);
        
            // makes sure it is within bounds
            if (out < 0 || out > 1) {
                output.innerHTML = "Make sure probabilities are between 0 and 1!";
                return "q";
            }

            return out;

        }
    }
    
    // if someone entered letters, throw an error
    catch (error) {
        output.innerHTML = "You can only enter numbers!"
        return "q";
    }
}