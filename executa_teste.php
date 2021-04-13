<?php 

$dados = '[{"id_trecho":"1","id_usuario":"1","nome_usuario":"demo","id_cidade_origem":"1","id_cidade_destino":"2","cidade_origem":"SANTA CATARINA - CAPITAL","cidade_destino":"SAO PAULO - CAPITAL","fx_5":"24.60","fx_10":"27.60","fx_15":"32.74","fx_20":"32.74","fx_25":"32.74","fx_30":"32.74","fx_35":"40.93","fx_40":"40.93","fx_45":"40.93","fx_50":"40.93","fx_55":"53.21","fx_60":"53.21","fx_65":"53.21","fx_70":"53.21","fx_75":"71.84","fx_80":"71.84","fx_85":"71.84","fx_90":"71.84","fx_95":"71.84","fx_100":"71.84","fx_200":"0.71","frete_valor":"0.20","pedagio":"4.06","gris":"0.13","trt":"0.00","tas":"1.11","cat":"0.00","tde":"450.00","aliq_icms":"12.00"},{"id_trecho":"2","id_usuario":"1","nome_usuario":"demo","id_cidade_origem":"1","id_cidade_destino":"2","cidade_origem":"SANTA CATARINA - CAPITAL","cidade_destino":"SAO PAULO - INTERIOR","fx_5":"31.98","fx_10":"35.18","fx_15":"38.70","fx_20":"38.70","fx_25":"38.70","fx_30":"42.57","fx_35":"53.21","fx_40":"53.21","fx_45":"53.21","fx_50":"53.21","fx_55":"69.17","fx_60":"69.17","fx_65":"69.17","fx_70":"69.17","fx_75":"93.39","fx_80":"93.39","fx_85":"93.39","fx_90":"93.39","fx_95":"93.39","fx_100":"93.39","fx_200":"0.93","frete_valor":"0.20","pedagio":"4.06","gris":"0.13","trt":"0.00","tas":"1.11","cat":"0.00","tde":"0.00","aliq_icms":"12.00"}]';

$ddos = json_decode($dados);

print_r($ddos);



 ?>