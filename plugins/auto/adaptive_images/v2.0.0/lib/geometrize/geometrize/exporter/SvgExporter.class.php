<?php

// Generated by Haxe 3.4.7
class geometrize_exporter_SvgExporter {
	public function __construct(){
	}

	static $SVG_STYLE_HOOK = "::svg_style_hook::";

	/**
	 * @param array $results
	 * @param int $width
	 * @param int $height
	 * @return string
	 */
	static function export($results, $width, $height){
		$out = geometrize_exporter_SvgExporter::getSvgPrelude();
		$out .= geometrize_exporter_SvgExporter::getSvgNodeOpen($width, $height);
		$shapes = array_column($results, 'shape');
		$out .= geometrize_exporter_SvgExporter::exportShapes($shapes);
		$out .= geometrize_exporter_SvgExporter::getSvgNodeClose();
		return $out;
	}

	/**
	 * @param array $shapes
	 * @return string
	 */
	static function exportShapes($shapes){
		$out = [];
		foreach ($shapes as $shape) {
			$out[] = geometrize_exporter_SvgExporter::exportShape($shape);
		}
		$out = implode("\x0A", $out);
		return $out;
	}

	/**
	 * @param geometrize_shape_Shape $shape
	 * @return string
	 */
	static function exportShape($shape){
		$s = $shape->getSvgShapeData();
		$sub = geometrize_exporter_SvgExporter::$SVG_STYLE_HOOK;
		$by = geometrize_exporter_SvgExporter::stylesForShape($shape);
		if ($sub===""){
			return implode(str_split($s), $by);
		} else {
			return str_replace($sub, $by, $s);
		}
	}

	static public function exportPolygon($points) {
		return geometrize_exporter_SvgExporter::exportLines($points, true);
	}

	/**
	 * @param array $points
	 *   each element is a ['x'=>int, 'y'=>int] array
	 * @param bool $closed
	 * @return string
	 */
	static public function exportLines($points, $closed = false) {
		$s1 = "<path d=\"M";

		$point = array_shift($points);
		$s1 .= $point['x'] . "," . $point['y'];

		$prevPoint = $point;
		foreach ($points as $point) {
			// find the shortest command to draw a line to this new point
			$dx = $point['x']-$prevPoint['x'];
			$dy = $point['y']-$prevPoint['y'];
			if ($dx === 0) {
				$pa = "V".$point['y'];
				$pr = "v".$dy;
			} elseif ($dy === 0) {
				$pa = "H".$point['x'];
				$pr = "h".$dx;
			}
			else {
				$pa = "L" . $point['x'] . "," . $point['y'];
				$pr = "l" . $dx . ',' . $dy;
			}
			if (strlen($pr)<strlen($pa)) {
				$s1 .= $pr;
			}
			else {
				$s1 .= $pa;
			}
			$prevPoint = $point;
		}
		if ($closed) {
			$s1 .= "z";
		}
		$s1 .= "\" " . geometrize_exporter_SvgExporter::$SVG_STYLE_HOOK . "/>";
		return $s1;
	}

	/**
	 * @return string
	 */
	static function getSvgPrelude(){
		return "<?xml version=\"1.0\" standalone=\"no\"?>\x0A";
	}

	/**
	 * @param int $width
	 * @param int $height
	 * @return string
	 */
	static function getSvgNodeOpen($width, $height){
		return "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.2\" baseProfile=\"tiny\" width=\"" . intval($width) . "\" height=\"" . intval($height) . "\">\x0A";
	}

	/**
	 * @return string
	 */
	static function getSvgNodeClose(){
		return "</svg>";
	}

	/**
	 * @param geometrize_shape_Shape $shape
	 * @return string
	 */
	static function stylesForShape($shape){
		$style = "";
		switch ($shape->getType()) {
			case geometrize_shape_ShapeTypes::T_LINE:
				$style = geometrize_exporter_SvgExporter::strokeForColor($shape->color);
				$style .= geometrize_exporter_SvgExporter::strokeOpacityForAlpha($shape->color & 255);
				break;
			case geometrize_shape_ShapeTypes::T_QUADRATIC_BEZIER:
				$style = geometrize_exporter_SvgExporter::strokeForColor($shape->color) . " fill=\"none\" ";
				$style .= geometrize_exporter_SvgExporter::strokeOpacityForAlpha($shape->color & 255);
				break;
			default:
				$style = geometrize_exporter_SvgExporter::fillForColor($shape->color) . " ";
				$style .= geometrize_exporter_SvgExporter::fillOpacityForAlpha($shape->color & 255);
				break;
		}
		return $style ;
	}

	/**
	 * @param int $color
	 * @return string
	 */
	static function rgbForColor($color){
		return "rgb(" . ($color >> 24 & 255) . "," . ($color >> 16 & 255) . "," . ($color >> 8 & 255) . ")";
	}

	/**
	 * @param int $color
	 * @return string
	 */
	static function strokeForColor($color){
		return "stroke=\"" . geometrize_exporter_SvgExporter::rgbForColor($color) . "\"";
	}

	/**
	 * @param int $color
	 * @return string
	 */
	static function fillForColor($color){
		return "fill=\"" . geometrize_exporter_SvgExporter::rgbForColor($color) . "\"";
	}

	/**
	 * @param int $alpha
	 * @return string
	 */
	static function fillOpacityForAlpha($alpha){
		if ($alpha === 255) {
			return "";
		}
		return "fill-opacity=\"" . ($alpha/255.0) . "\"";
	}

	/**
	 * @param int $alpha
	 * @return string
	 */
	static function strokeOpacityForAlpha($alpha){
		if ($alpha === 255) {
			return "";
		}
		return "stroke-opacity=\"" . ($alpha/255.0)  . "\"";
	}

	/**
	 * @return string
	 */
	function __toString(){
		return 'geometrize.exporter.SvgExporter';
	}
}