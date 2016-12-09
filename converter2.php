array (
  'http://dadoscontraosagrotoxicos.org/datacube/' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://www.w3.org/2002/07/owl#Ontology',
      ),
      1 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Example DataCube Knowledge Base',
      ),
      1 => 
      array (
        'type' => 'literal',
        'value' => '',
        'lang' => 'en',
      ),
    ),
    'http://purl.org/dc/elements/1.1/description' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'This knowledgebase contains one Data Structure Definition with one Data Set. This Data Set has a couple of Components and Observations.',
      ),
    ),
    'http://purl.obolibrary.org/obo#part_of' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/dsd' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#DataStructureDefinition',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'A Data Structure Definition',
        'lang' => 'en',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#comment' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Defines the structure of a DataSet or slice.',
      ),
    ),
    'http://purl.org/linked-data/cube#component' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/states_of_brazil',
      ),
      1 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/pesticide',
      ),
      2 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/year',
      ),
      3 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoproduto',
      ),
      4 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/price',
      ),
      5 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/qtdproduto',
      ),
      6 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/qtdintoxicacoes',
      ),
      7 => 
      array (
        'type' => 'uri',
        'value' => 'http://www.w3.org/2000/01/rdf-schema#label',
      ),
      8 => 
      array (
        'type' => 'uri',
        'value' => 'http://www.w3.org/2001/XMLSchema#string',
      ),
    ),
  ),
  'http://dbpedia.org/resource/states_of_brazil' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Estado',
      ),
    ),
    'http://purl.org/linked-data/cube#dimension' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/estado',
      ),
    ),
  ),
  'http://dbpedia.org/resource/pesticide' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Classe de Agrotóxico',
      ),
    ),
    'http://purl.org/linked-data/cube#dimension' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico',
      ),
    ),
  ),
  'http://dbpedia.org/resource/year' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Ano',
      ),
    ),
    'http://purl.org/linked-data/cube#dimension' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/ano',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoproduto' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Tipo de Produto de Agrotóxico',
      ),
    ),
    'http://purl.org/linked-data/cube#dimension' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto',
      ),
    ),
  ),
  'http://www.w3.org/2001/XMLSchema#float' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Component Specification of Unit',
      ),
    ),
    'http://purl.org/linked-data/cube#attribute' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/unit',
      ),
    ),
  ),
  'http://dbpedia.org/resource/Price' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Custo Total de Compra de Toneladas de Agrotóxico',
      ),
    ),
    'http://purl.org/linked-data/cube#measure' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/resource/qtdProduto' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de Agrotóxico por Toneladas',
      ),
    ),
    'http://purl.org/linked-data/cube#measure' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/resource/qtdIntoxicacoes' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de Casos de Intoxicação Registrados pelo SINAN do Ministério da Saúde',
      ),
    ),
    'http://purl.org/linked-data/cube#measure' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes',
      ),
    ),
  ),
  'http://www.w3.org/2000/01/rdf-schema#label' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#ComponentSpecification',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Label',
      ),
    ),
    'http://purl.org/linked-data/cube#measure' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/properties/label',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/dataset' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#DataSet',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'A DataSet',
        'datatype' => 'http://www.w3.org/2001/XMLSchema#string',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#comment' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Represents a collection of observations and conforming to some common dimensional structure.',
      ),
    ),
    'http://purl.org/linked-data/cube#structure' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dsd',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#DimensionProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Estado',
        'lang' => 'en',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#DimensionProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Classe de Agrotóxico',
        'lang' => 'en',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#DimensionProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Ano',
        'lang' => 'en',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#DimensionProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Tipo de Produto de Agrotóxico',
        'lang' => 'en',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#AttributeProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Unit',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#MeasureProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Custo Total de Compra de Toneladas de Agrotóxico',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#MeasureProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de Agrotóxico por Toneladas',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#MeasureProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de Casos de Intoxicação Registrados pelo SINAN do Ministério da Saúde',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#MeasureProperty',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Label',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj0' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Rio_de_Janeiro_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '15538000',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '754',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '83',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida no Rio de Janeiro em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj1' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Rio_de_Janeiro_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '17836400',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '851',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '51',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida no Rio de Janeiro em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj2' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Rio_de_Janeiro_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '17540600',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '219',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '83',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida no Rio de Janeiro em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj3' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Rio_de_Janeiro_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '17200600',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '172',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '51',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida no Rio de Janeiro em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj4' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/São_Paulo_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '1682252000',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '52333',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '635',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida em São Paulo em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj5' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/São_Paulo_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2044505000',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '68211',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '653',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida em São Paulo em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj6' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/São_Paulo_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '1449940200',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '18997',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '635',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida em São Paulo em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj7' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/São_Paulo_(state)',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '1704892600',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '23236',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '653',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida em São Paulo em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj8' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Espírito_Santo',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '43574400',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2706',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '290',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida no Espírito Santo em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj9' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Espírito_Santo',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '75629600',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '3568',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '327',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida no Espírito Santo em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj10' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Espírito_Santo',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '82946400',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '968',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '290',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida no Espírito Santo em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj11' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Espírito_Santo',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '89260200',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '868',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '327',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida no Espírito Santo em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj12' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Minas_Gerais',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '624172000',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '25972',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '626',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida em Minas Gerais em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj13' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Minas_Gerais',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Herbicide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '691645000',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '28671',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '820',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo herbicida em Minas Gerais em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj14' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Minas_Gerais',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2011',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '855147600',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '10310',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '626',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida em Minas Gerais em 2011',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
  'http://dadoscontraosagrotoxicos.org/datacube/obj15' => 
  array (
    'http://www.w3.org/1999/02/22-rdf-syntax-ns#type' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://purl.org/linked-data/cube#Observation',
      ),
    ),
    'http://purl.org/linked-data/cube#dataSet' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dadoscontraosagrotoxicos.org/datacube/dataset',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/estado' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Minas_Gerais',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/classeagrotoxico' => 
    array (
      0 => 
      array (
        'type' => 'uri',
        'value' => 'http://dbpedia.org/resource/Inseticide',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/ano' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '2012',
        'datatype' => 'http://dbpedia.org/resource/Year',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/tipoproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Produto comercial',
        'datatype' => 'http://dadoscontraosagrotoxicos.org/datacube/resource/tipoProduto',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/unit' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico de uma determinada Classe em um determinado Estado e um Ano. ',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/custocompra' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '1038560600',
        'datatype' => 'http://dbpedia.org/resource/Brazilian_real',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdproduto' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '13439',
        'datatype' => 'http://dbpedia.org/resource/Tonne',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/qtdintoxicacoes' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '820',
        'datatype' => 'http://dbpedia.org/resource/Integer',
      ),
    ),
    'http://dadoscontraosagrotoxicos.org/datacube/properties/label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => 'Quantidade de intoxicações por consumo de Agrotóxico do tipo inseticida em Minas Gerais em 2012',
        'datatype' => 'http://dbpedia.org/resource/String',
      ),
    ),
    'http://www.w3.org/2000/01/rdf-schema#label' => 
    array (
      0 => 
      array (
        'type' => 'literal',
        'value' => '',
      ),
    ),
  ),
)
