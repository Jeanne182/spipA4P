<?php

// Generated by Haxe 3.4.7
class geometrize_Core {

	/**
	 * @param geometrize_bitmap_Bitmap $target
	 * @param geometrize_bitmap_Bitmap $current
	 * @param array $lines
	 * @param int $alpha
	 * @return int
	 * @throws HException
	 */
	static function computeColor($target, $current, $lines, $alpha){
		if (!($target!==null)){
			throw new HException("FAIL: target != null");
		}
		if (!($current!==null)){
			throw new HException("FAIL: current != null");
		}
		if (!($lines!==null)){
			throw new HException("FAIL: lines != null");
		}
		if (!($alpha>=0)){
			throw new HException("FAIL: alpha >= 0");
		}
		$totalRed = 0;
		$totalGreen = 0;
		$totalBlue = 0;
		$count = 0;

		if ($alpha < 255) {
			$f = 256 * 255 /$alpha;
			$a = intval($f);

			foreach($lines as $line){
				$y = $line['y'];
				for ($x=$line['x1']; $x<=$line['x2']; $x++) {
					$t = $target->data[$y][$x];
					$c = $current->data[$y][$x];
					$totalRed += (($t >> 24 & 255)-($c >> 24 & 255))*$a+($c >> 24 & 255)*256;
					$totalGreen += (($t >> 16 & 255)-($c >> 16 & 255))*$a+($c >> 16 & 255)*256;
					$totalBlue += (($t >> 8 & 255)-($c >> 8 & 255))*$a+($c >> 8 & 255)*256;
					$count++;
				}
			}
			$totalRed = $totalRed >> 8;
			$totalGreen = $totalGreen >> 8;
			$totalBlue = $totalBlue >> 8;
		}
		else {
			foreach($lines as $line){
				$y = $line['y'];
				for ($x=$line['x1']; $x<=$line['x2']; $x++) {
					$t = $target->data[$y][$x];
					$totalRed += ($t >> 24 & 255);
					$totalGreen += ($t >> 16 & 255);
					$totalBlue += ($t >> 8 & 255);
					$count++;
				}
			}
		}

		if ($count===0){
			return 0;
		}

		$r = intval(round($totalRed/$count));
		$r = min(255, $r);

		$g = intval(round($totalGreen/$count));
		$g = min(255, $g);

		$b = intval(round($totalBlue/$count));
		$b = min(255, $b);

		return ($r << 24) + ($g << 16) + ($b << 8) + $alpha;
	}

	/**
	 * @param geometrize_bitmap_Bitmap $target
	 * @param geometrize_bitmap_Bitmap $current
	 * @return int
	 * @throws HException
	 */
	static function differenceFull($target, $current){

		$current->errorCache = [];
		$total = 0;
		$width = $target->width;
		$height = $target->height;
		for ($y = 0; $y<$height; $y++){
			for ($x = 0; $x<$width; $x++){
				$t = &$target->data[$y][$x];
				$c = &$current->data[$y][$x];
				$e = 0;
				foreach ([24,16,8,0] as $k){
					$dk = ($t>>$k & 255)-($c>>$k & 255);
					if ($dk<0){
						$dk *= -1;
					}
					$e += $dk;
				}
				$total += ($current->errorCache[$y][$x] = $e);
			}
		}
		return $total;
	}

	/**
	 * @param geometrize_bitmap_Bitmap $target
	 * @param geometrize_bitmap_Bitmap $before
	 * @param geometrize_bitmap_Bitmap $after
	 * @param int $score
	 * @param array $lines
	 * @param null|int $bestScore
	 * @return int
	 */
	static function differencePartial($target, $before, $after, $score, $lines, $bestScore = null){

		$total = $score;
		foreach ($lines as &$line) {
			$y = $line['y'];
			$_xe = $line['x2']+1;
			for ($x = $line['x1']; $x<$_xe; $x++){
				if (!isset($before->errorCache[$y][$x])){
					$e = 0;
					$t = &$target->data[$y][$x];
					$b = &$before->data[$y][$x];
					foreach ([24,16,8,0] as $k){
						$dk = ($t>>$k & 255)-($b>>$k & 255);
						if ($dk<0){
							$dk *= -1;
						}
						$e += $dk;
					}
					$before->errorCache[$y][$x] = $e;
				}
				$total -= $before->errorCache[$y][$x];
			}
		}
		if (!is_null($bestScore) && $total>$bestScore){
			return $total;
		}

		foreach ($lines as &$line) {
			$y = $line['y'];
			$_xe = $line['x2']+1;
			for ($x = $line['x1']; $x<$_xe; $x++){
				$t = &$target->data[$y][$x];
				$a = &$after->data[$y][$x];
				foreach ([24,16,8,0] as $k){
					$dk = ($t>>$k & 255)-($a>>$k & 255);
					if ($dk<0){
						$dk *= -1;
					}
					$total += $dk;
				}
			}
			if (!is_null($bestScore) && $total>$bestScore){
				return $total;
			}
		}

		return $total;
	}

	/**
	 * @param array $shapes
	 * @param int $alpha
	 * @param int $nRandom
	 * @param geometrize_bitmap_Bitmap $target
	 * @param geometrize_bitmap_Bitmap $current
	 * @param geometrize_bitmap_Bitmap $buffer
	 * @param int $lastScore
	 * @return geometrize_State
	 * @throws HException
	 */
	static function bestRandomState($shapes, $shapeSizeFactor, $alpha, $nRandom, $target, $current, $buffer, $lastScore){
		$bestEnergy = null;
		$bestState = null;

		$nRandom = max($nRandom, 1);

		for ($i = 0; $i<$nRandom; $i++){
			$state = new geometrize_State(geometrize_shape_ShapeFactory::randomShapeOf($shapes, $current->width, $current->height, $shapeSizeFactor), $alpha, $target, $current, $buffer);
			$energy = $state->energy($lastScore, $bestEnergy);
			if (is_null($bestEnergy) || $energy<$bestEnergy){
				$bestEnergy = $energy;
				$bestState = $state;
			}
		}

		return $bestState;
	}

	/**
	 * @param array $shapes
	 * @param float $shapeSizeFactor
	 * @param int $alpha
	 * @param int $nRandom
	 * @param int $maxMutationAge
	 * @param geometrize_bitmap_Bitmap $target
	 * @param geometrize_bitmap_Bitmap $current
	 * @param geometrize_bitmap_Bitmap $buffer
	 * @param int $lastScore
	 * @return geometrize_State
	 * @throws HException
	 */
	static function bestHillClimbState($shapes, $shapeSizeFactor, $alpha, $nRandom, $maxMutationAge, $target, $current, $buffer, $lastScore){
		$state = geometrize_Core::bestRandomState($shapes, $shapeSizeFactor, $alpha, $nRandom, $target, $current, $buffer, $lastScore);
		$state = geometrize_Core::hillClimb($state, $maxMutationAge, $lastScore);
		return $state;
	}

	/**
	 * @param geometrize_State $state
	 * @param int $maxAge
	 * @param int $lastScore
	 * @return geometrize_State
	 * @throws HException
	 */
	static function hillClimb($state, $maxAge, $lastScore){
		if (!($state!==null)){
			throw new HException("FAIL: state != null");
		}
		if (!($maxAge>=0)){
			throw new HException("FAIL: maxAge >= 0");
		}

		$bestEnergy = $state->energy($lastScore);
		$bestState = clone $state;

		$age = 0;
		while ($age++<$maxAge){
			$state1 = clone $bestState;
			$state1->mutate();
			$energy = $state1->energy($lastScore, $bestEnergy);

			if ($energy<$bestEnergy){
				$bestEnergy = $energy;
				$bestState = $state1;
				$age = 0;
			}
		}

		return $bestState;
	}

	/**
	 * @param geometrize_shape_Shape $shape
	 * @param int $alpha
	 * @param geometrize_bitmap_Bitmap $target
	 * @param geometrize_bitmap_Bitmap $current
	 * @param geometrize_bitmap_Bitmap $buffer
	 * @param int $score
	 * @param null|int $bestScore
	 * @return int
	 * @throws HException
	 */
	static function energy(&$shape, $alpha, $target, $current, $buffer, $score, $bestScore = null){
		if (!($shape!==null)){
			throw new HException("FAIL: shape != null");
		}
		if (!($target!==null)){
			throw new HException("FAIL: target != null");
		}
		if (!($current!==null)){
			throw new HException("FAIL: current != null");
		}
		if (!($buffer!==null)){
			throw new HException("FAIL: buffer != null");
		}
		$lines = $shape->rasterize();
		if (!isset($shape->color)){
			$shape->color = geometrize_Core::computeColor($target, $current, $lines, $alpha);
		}
		// copyLines only if opacity!=1 (speed issue with no transparency in shapes)
		if ($shape->color & 255!==255){
			geometrize_rasterizer_Rasterizer::copyLines($buffer, $current, $lines);
		}
		geometrize_rasterizer_Rasterizer::drawLines($buffer, $shape->color, $lines);
		return geometrize_Core::differencePartial($target, $current, $buffer, $score, $lines, $bestScore);
	}

	function __toString(){
		return 'geometrize.Core';
	}
}
