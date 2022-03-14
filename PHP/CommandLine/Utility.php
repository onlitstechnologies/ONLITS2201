<?php
    class utility
    {
        private $units = array("Zero","One","Two","Three","Four","Five","Six","Seven","Eight","Nine");
        private $tens = array("Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen" );
        private $tens2 = array("", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninty" );

        function figures_to_words($amount)
        {
            $amount_words=$this->units[0];
            if($amount<10)
            {
                $amount_words = $this->units_f($amount);
            }
            else if($amount<100)
            {
                $amount_words = $this->tens_f($amount);
            }
            else if($amount<1000)
            {
                $amount_words = $this->hundreds_f($amount);
            }

            else if($amount<100000)
            {
                $amount_words = $this->thousands_f($amount);
            }
            else if($amount<1000000)
            {
                $amount_words = $this->lakhs_f($amount);
            }

            return("Rupees " . $amount_words . " Only");
        }

        function units_f($amt)
        {
            $u = (int)$amt;
            return $this->units[$u];
        }

        function tens_f($amt)
        {
            if ($amt < 20)
            {
                $t = $amt%10;
                return $this->tens[$t];
            }
            else
            {
                $u = ($amt % 10);
                $t = ($amt / 10);
                if ($u == 0)
                {
                    return $this->tens2[$t];
                }
                else
                { 
                    return $this->tens2[$t] . " " . $this->units_f($u);
                }
            }
        }

        function hundreds_f($amt)
        {
            $t = (int)($amt % 100);
            $h = (int)($amt / 100);
            if ($t == 0)
            {
                return $this->units[$h] + " Hundred";
            }
            else
            {
                return $this->units[$h] . " Hundred " . $this->tens_f($t);
            }
        }

        function thousands_f($amt)
        {
            if ($amt < 10000)
            {
                $h = (int)($amt % 1000);
                $th = (int)($amt / 1000);
                if ($h == 0)
                {
                    return $this->units[$th] . " Thousand";
                }
                else
                {
                    return $this->units[$th] . " Hundred " . $this->hundreds_f($h);
                }
            }
            else
            {
                $h = ($amt % 1000);
                $th = ($amt / 1000);

                if ($h == 0)
                {
                    return $this->tens_f($th) . " Thousand";
                }
                else if ($h < 10)
                {
                    return $this->tens_f($th) . " Thousand " . $this->units[$h];
                }
                else if($h<100)
                {
                    return $this->tens_f($th) . " Thousand " . $this->tens_f($h) ;
                }
                else
                {
                    return $this->tens_f($th) . " Thousand " . $this->hundreds_f($h);
                }
            }
        }

        function lakhs_f($amt)
        {
            if ($amt < 1000000)
            {
                $th = ($amt % 10000);
                $l = ($amt / 10000);
                if ($th == 0)
                {
                    return $this->units[$l] . " Lakh";
                }
                else
                {
                    return $this->units[$l] . " Lakh " . $this->thousands_f($th);
                }
            }
            else
            {
                $th = ($amt % 10000);
                $l = ($amt / 10000);

                if ($th == 0)
                {
                    return $this->tens_f($l) . " Lakh";
                }
                else
                {
                    return $this->tens_f($l) . " Lakh " . $this->thousands_f($th);
                }
            }
        }
    }

    $u = new utility();
    echo $u->figures_to_words(96839) . "\n";