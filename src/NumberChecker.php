<?php
class NumberChecker  {


	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

	public function __toString(): string
    {
        return 'NumberChecker: ' . $this->number;
    }

}
?>
