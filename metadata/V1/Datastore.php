<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace GPBMetadata\Google\Datastore\V1;

class Datastore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af51f0a23676f6f676c652f6461746173746f72652f76312f6461746173746f72652e70726f746f1213676f6f676c652e6461746173746f72652e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a20676f6f676c652f6461746173746f72652f76312f656e746974792e70726f746f1a1f676f6f676c652f6461746173746f72652f76312f71756572792e70726f746f228d010a0d4c6f6f6b75705265717565737412170a0a70726f6a6563745f69641808200128094203e0410212360a0c726561645f6f7074696f6e7318012001280b32202e676f6f676c652e6461746173746f72652e76312e526561644f7074696f6e73122b0a046b65797318032003280b32182e676f6f676c652e6461746173746f72652e76312e4b65794203e0410222a2010a0e4c6f6f6b7570526573706f6e736512300a05666f756e6418012003280b32212e676f6f676c652e6461746173746f72652e76312e456e74697479526573756c7412320a076d697373696e6718022003280b32212e676f6f676c652e6461746173746f72652e76312e456e74697479526573756c74122a0a08646566657272656418032003280b32182e676f6f676c652e6461746173746f72652e76312e4b65792289020a0f52756e51756572795265717565737412170a0a70726f6a6563745f69641808200128094203e0410212360a0c706172746974696f6e5f696418022001280b32202e676f6f676c652e6461746173746f72652e76312e506172746974696f6e496412360a0c726561645f6f7074696f6e7318012001280b32202e676f6f676c652e6461746173746f72652e76312e526561644f7074696f6e73122b0a05717565727918032001280b321a2e676f6f676c652e6461746173746f72652e76312e5175657279480012320a0967716c5f717565727918072001280b321d2e676f6f676c652e6461746173746f72652e76312e47716c51756572794800420c0a0a71756572795f7479706522730a1052756e5175657279526573706f6e736512340a05626174636818012001280b32252e676f6f676c652e6461746173746f72652e76312e5175657279526573756c74426174636812290a05717565727918022001280b321a2e676f6f676c652e6461746173746f72652e76312e517565727922780a17426567696e5472616e73616374696f6e5265717565737412170a0a70726f6a6563745f69641808200128094203e0410212440a137472616e73616374696f6e5f6f7074696f6e73180a2001280b32272e676f6f676c652e6461746173746f72652e76312e5472616e73616374696f6e4f7074696f6e73222f0a18426567696e5472616e73616374696f6e526573706f6e736512130a0b7472616e73616374696f6e18012001280c22440a0f526f6c6c6261636b5265717565737412170a0a70726f6a6563745f69641808200128094203e0410212180a0b7472616e73616374696f6e18012001280c4203e0410222120a10526f6c6c6261636b526573706f6e73652288020a0d436f6d6d69745265717565737412170a0a70726f6a6563745f69641808200128094203e0410212350a046d6f646518052001280e32272e676f6f676c652e6461746173746f72652e76312e436f6d6d6974526571756573742e4d6f646512150a0b7472616e73616374696f6e18012001280c480012300a096d75746174696f6e7318062003280b321d2e676f6f676c652e6461746173746f72652e76312e4d75746174696f6e22460a044d6f646512140a104d4f44455f554e535045434946494544100012110a0d5452414e53414354494f4e414c100112150a114e4f4e5f5452414e53414354494f4e414c100242160a147472616e73616374696f6e5f73656c6563746f7222660a0e436f6d6d6974526573706f6e7365123d0a106d75746174696f6e5f726573756c747318032003280b32232e676f6f676c652e6461746173746f72652e76312e4d75746174696f6e526573756c7412150a0d696e6465785f75706461746573180420012805225a0a12416c6c6f636174654964735265717565737412170a0a70726f6a6563745f69641808200128094203e04102122b0a046b65797318012003280b32182e676f6f676c652e6461746173746f72652e76312e4b65794203e04102223d0a13416c6c6f63617465496473526573706f6e736512260a046b65797318012003280b32182e676f6f676c652e6461746173746f72652e76312e4b6579226e0a11526573657276654964735265717565737412170a0a70726f6a6563745f69641808200128094203e0410212130a0b64617461626173655f6964180920012809122b0a046b65797318012003280b32182e676f6f676c652e6461746173746f72652e76312e4b65794203e0410222140a1252657365727665496473526573706f6e73652287020a084d75746174696f6e122d0a06696e7365727418042001280b321b2e676f6f676c652e6461746173746f72652e76312e456e746974794800122d0a0675706461746518052001280b321b2e676f6f676c652e6461746173746f72652e76312e456e746974794800122d0a0675707365727418062001280b321b2e676f6f676c652e6461746173746f72652e76312e456e746974794800122a0a0664656c65746518072001280b32182e676f6f676c652e6461746173746f72652e76312e4b6579480012160a0c626173655f76657273696f6e1808200128034801420b0a096f7065726174696f6e421d0a1b636f6e666c6963745f646574656374696f6e5f737472617465677922630a0e4d75746174696f6e526573756c7412250a036b657918032001280b32182e676f6f676c652e6461746173746f72652e76312e4b6579120f0a0776657273696f6e18042001280312190a11636f6e666c6963745f646574656374656418052001280822d5010a0b526561644f7074696f6e73124c0a10726561645f636f6e73697374656e637918012001280e32302e676f6f676c652e6461746173746f72652e76312e526561644f7074696f6e732e52656164436f6e73697374656e6379480012150a0b7472616e73616374696f6e18022001280c4800224d0a0f52656164436f6e73697374656e637912200a1c524541445f434f4e53495354454e43595f554e5350454349464945441000120a0a065354524f4e471001120c0a084556454e5455414c100242120a10636f6e73697374656e63795f7479706522e3010a125472616e73616374696f6e4f7074696f6e7312470a0a726561645f777269746518012001280b32312e676f6f676c652e6461746173746f72652e76312e5472616e73616374696f6e4f7074696f6e732e526561645772697465480012450a09726561645f6f6e6c7918022001280b32302e676f6f676c652e6461746173746f72652e76312e5472616e73616374696f6e4f7074696f6e732e526561644f6e6c7948001a290a09526561645772697465121c0a1470726576696f75735f7472616e73616374696f6e18012001280c1a0a0a08526561644f6e6c7942060a046d6f646532930a0a094461746173746f7265129d010a064c6f6f6b757012222e676f6f676c652e6461746173746f72652e76312e4c6f6f6b7570526571756573741a232e676f6f676c652e6461746173746f72652e76312e4c6f6f6b7570526573706f6e7365224a82d3e493022522202f76312f70726f6a656374732f7b70726f6a6563745f69647d3a6c6f6f6b75703a012ada411c70726f6a6563745f69642c726561645f6f7074696f6e732c6b6579731286010a0852756e517565727912242e676f6f676c652e6461746173746f72652e76312e52756e5175657279526571756573741a252e676f6f676c652e6461746173746f72652e76312e52756e5175657279526573706f6e7365222d82d3e493022722222f76312f70726f6a656374732f7b70726f6a6563745f69647d3a72756e51756572793a012a12b3010a10426567696e5472616e73616374696f6e122c2e676f6f676c652e6461746173746f72652e76312e426567696e5472616e73616374696f6e526571756573741a2d2e676f6f676c652e6461746173746f72652e76312e426567696e5472616e73616374696f6e526573706f6e7365224282d3e493022f222a2f76312f70726f6a656374732f7b70726f6a6563745f69647d3a626567696e5472616e73616374696f6e3a012ada410a70726f6a6563745f696412c2010a06436f6d6d697412222e676f6f676c652e6461746173746f72652e76312e436f6d6d6974526571756573741a232e676f6f676c652e6461746173746f72652e76312e436f6d6d6974526573706f6e7365226f82d3e493022522202f76312f70726f6a656374732f7b70726f6a6563745f69647d3a636f6d6d69743a012ada412570726f6a6563745f69642c6d6f64652c7472616e73616374696f6e2c6d75746174696f6e73da411970726f6a6563745f69642c6d6f64652c6d75746174696f6e73129f010a08526f6c6c6261636b12242e676f6f676c652e6461746173746f72652e76312e526f6c6c6261636b526571756573741a252e676f6f676c652e6461746173746f72652e76312e526f6c6c6261636b526573706f6e7365224682d3e493022722222f76312f70726f6a656374732f7b70726f6a6563745f69647d3a726f6c6c6261636b3a012ada411670726f6a6563745f69642c7472616e73616374696f6e12a4010a0b416c6c6f6361746549647312272e676f6f676c652e6461746173746f72652e76312e416c6c6f63617465496473526571756573741a282e676f6f676c652e6461746173746f72652e76312e416c6c6f63617465496473526573706f6e7365224282d3e493022a22252f76312f70726f6a656374732f7b70726f6a6563745f69647d3a616c6c6f636174654964733a012ada410f70726f6a6563745f69642c6b65797312a0010a0a5265736572766549647312262e676f6f676c652e6461746173746f72652e76312e52657365727665496473526571756573741a272e676f6f676c652e6461746173746f72652e76312e52657365727665496473526573706f6e7365224182d3e493022922242f76312f70726f6a656374732f7b70726f6a6563745f69647d3a726573657276654964733a012ada410f70726f6a6563745f69642c6b6579731a76ca41186461746173746f72652e676f6f676c65617069732e636f6dd2415868747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f6461746173746f726542a1010a17636f6d2e676f6f676c652e6461746173746f72652e7631420e4461746173746f726550726f746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6461746173746f72652f76313b6461746173746f7265aa0219476f6f676c652e436c6f75642e4461746173746f72652e5631ca0219476f6f676c655c436c6f75645c4461746173746f72655c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

