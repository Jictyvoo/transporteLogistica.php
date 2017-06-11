<?php
	function getVolume($modeloContainer){
		$comprimento["DryVan"] = 5.890;
		$largura["DryVan"] = 2.345;
		$altura["DryVan"] = 2.400;

		$comprimento["Bulk"] = 5.890;
		$largura["Bulk"] = 2.345;
		$altura["Bulk"] = 2.400;

		$comprimento["Ventilated"] = 5.890;
		$largura["Ventilated"] = 2.345;
		$altura["Ventilated"] = 2.400;

		$comprimento["OpenTop"] = 5.889;
		$largura["OpenTop"] = 2.345;
		$altura["OpenTop"] = 2.312;

		$comprimento["Reefer"] = 5.450;
		$largura["Reefer"] = 2.260;
		$altura["Reefer"] = 2.247;

		$comprimento["DryVanMaior"] = 12.015;
		$largura["DryVanMaior"] = 2.345;
		$altura["DryVanMaior"] = 2.362;

		$comprimento["BulkMaior"] = 12.015;
		$largura["BulkMaior"] = 2.345;
		$altura["BulkMaior"] = 2.362;

		$comprimento["DryHighCube"] = 12.015;
		$largura["DryHighCube"] = 2.345;
		$altura["DryHighCube"] = 2.690;

		$comprimento["OpenTopMaior"] = 12.302;
		$largura["OpenTopMaior"] = 2.332;
		$altura["OpenTopMaior"] = 2.279;

		$comprimento["ReeferMaior"] = 11.550;
		$largura["ReeferMaior"] = 2.270;
		$altura["ReeferMaior"] = 2.200;

		$comprimento["PortHole"] = 11.550;
		$largura["PortHole"] = 2.270;
		$altura["PortHole"] = 2.200;

		$comprimento["FlatTrack"] = 12.066;
		$largura["FlatTrack"] = 2.263;
		$altura["FlatTrack"] = 2.134;

		return number_format(($comprimento[$modeloContainer] * $largura[$modeloContainer] * $altura[$modeloContainer]), 2);
	}

	function getConsumoCaminhao($modelo){
		$consumo["Toco"] = (5.5 + 7.5)/2;
		$consumo["Truck"] = (5.5 + 7.5)/2;
		$consumo["Carreta 2 eixos"] = (4.5 + 7.5)/2;
		$consumo["Carreta Baú"] = (4.5 + 7.5)/2;
		$consumo["Carreta 3 eixos"] = (3.5 + 4.5)/2;
		$consumo["Carreta Cavalo Truckado"] = (3.5 + 4.5)/2;
		$consumo["Carreta Cavalo Truckado Baú"] = (1.8 + 2.5)/2;
		$consumo["Bi-trem(Treminhão) - 7 eixos"] = (1.8 + 2.5)/2;

		return number_format($consumo[$modelo], 2);
	}

	$caminhoes = array("Toco", "Truck", "Carreta 2 eixos", "Carreta Baú", "Carreta 3 eixos", "Carreta Cavalo Truckado", "Carreta Cavalo Truckado Baú", "Bi-trem(Treminhão) - 7 eixos");

	$conteineres = array("DryVan", "Bulk", "Ventilated", "OpenTop", "Reefer", "DryVanMaior", "BulkMaior", "DryHighCube", "OpenTopMaior", "ReeferMaior", "PortHole", "FlatTrack");
?>