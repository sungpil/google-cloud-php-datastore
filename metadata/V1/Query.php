<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace GPBMetadata\Google\Datastore\V1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac1150a1f676f6f676c652f6461746173746f72652f76312f71756572792e70726f746f1213676f6f676c652e6461746173746f72652e76311a20676f6f676c652f6461746173746f72652f76312f656e746974792e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a18676f6f676c652f747970652f6c61746c6e672e70726f746f22af010a0c456e74697479526573756c74122b0a06656e7469747918012001280b321b2e676f6f676c652e6461746173746f72652e76312e456e74697479120f0a0776657273696f6e180420012803120e0a06637572736f7218032001280c22510a0a526573756c7454797065121b0a17524553554c545f545950455f554e535045434946494544100012080a0446554c4c1001120e0a0a50524f4a454354494f4e1002120c0a084b45595f4f4e4c59100322f2020a05517565727912330a0a70726f6a656374696f6e18022003280b321f2e676f6f676c652e6461746173746f72652e76312e50726f6a656374696f6e12310a046b696e6418032003280b32232e676f6f676c652e6461746173746f72652e76312e4b696e6445787072657373696f6e122b0a0666696c74657218042001280b321b2e676f6f676c652e6461746173746f72652e76312e46696c74657212310a056f7264657218052003280b32222e676f6f676c652e6461746173746f72652e76312e50726f70657274794f72646572123b0a0b64697374696e63745f6f6e18062003280b32262e676f6f676c652e6461746173746f72652e76312e50726f70657274795265666572656e636512140a0c73746172745f637572736f7218072001280c12120a0a656e645f637572736f7218082001280c120e0a066f6666736574180a20012805122a0a056c696d6974180c2001280b321b2e676f6f676c652e70726f746f6275662e496e74333256616c7565221e0a0e4b696e6445787072657373696f6e120c0a046e616d6518012001280922210a1150726f70657274795265666572656e6365120c0a046e616d6518022001280922460a0a50726f6a656374696f6e12380a0870726f706572747918012001280b32262e676f6f676c652e6461746173746f72652e76312e50726f70657274795265666572656e636522d1010a0d50726f70657274794f7264657212380a0870726f706572747918012001280b32262e676f6f676c652e6461746173746f72652e76312e50726f70657274795265666572656e6365123f0a09646972656374696f6e18022001280e322c2e676f6f676c652e6461746173746f72652e76312e50726f70657274794f726465722e446972656374696f6e22450a09446972656374696f6e12190a15444952454354494f4e5f554e5350454349464945441000120d0a09415343454e44494e471001120e0a0a44455343454e44494e4710022299010a0646696c74657212400a10636f6d706f736974655f66696c74657218012001280b32242e676f6f676c652e6461746173746f72652e76312e436f6d706f7369746546696c7465724800123e0a0f70726f70657274795f66696c74657218022001280b32232e676f6f676c652e6461746173746f72652e76312e50726f706572747946696c7465724800420d0a0b66696c7465725f7479706522a9010a0f436f6d706f7369746546696c74657212390a026f7018012001280e322d2e676f6f676c652e6461746173746f72652e76312e436f6d706f7369746546696c7465722e4f70657261746f72122c0a0766696c7465727318022003280b321b2e676f6f676c652e6461746173746f72652e76312e46696c746572222d0a084f70657261746f7212180a144f50455241544f525f554e535045434946494544100012070a03414e44100122c7020a0e50726f706572747946696c74657212380a0870726f706572747918012001280b32262e676f6f676c652e6461746173746f72652e76312e50726f70657274795265666572656e636512380a026f7018022001280e322c2e676f6f676c652e6461746173746f72652e76312e50726f706572747946696c7465722e4f70657261746f7212290a0576616c756518032001280b321a2e676f6f676c652e6461746173746f72652e76312e56616c75652295010a084f70657261746f7212180a144f50455241544f525f554e5350454349464945441000120d0a094c4553535f5448414e100112160a124c4553535f5448414e5f4f525f455155414c100212100a0c475245415445525f5448414e100312190a15475245415445525f5448414e5f4f525f455155414c100412090a05455155414c100512100a0c4841535f414e434553544f52100b22a5020a0847716c517565727912140a0c71756572795f737472696e6718012001280912160a0e616c6c6f775f6c69746572616c7318022001280812480a0e6e616d65645f62696e64696e677318052003280b32302e676f6f676c652e6461746173746f72652e76312e47716c51756572792e4e616d656442696e64696e6773456e74727912430a13706f736974696f6e616c5f62696e64696e677318042003280b32262e676f6f676c652e6461746173746f72652e76312e47716c5175657279506172616d657465721a5c0a124e616d656442696e64696e6773456e747279120b0a036b657918012001280912350a0576616c756518022001280b32262e676f6f676c652e6461746173746f72652e76312e47716c5175657279506172616d657465723a02380122640a1147716c5175657279506172616d65746572122b0a0576616c756518022001280b321a2e676f6f676c652e6461746173746f72652e76312e56616c7565480012100a06637572736f7218032001280c480042100a0e706172616d657465725f7479706522de030a105175657279526573756c74426174636812170a0f736b69707065645f726573756c747318062001280512160a0e736b69707065645f637572736f7218032001280c12480a12656e746974795f726573756c745f7479706518012001280e322c2e676f6f676c652e6461746173746f72652e76312e456e74697479526573756c742e526573756c745479706512390a0e656e746974795f726573756c747318022003280b32212e676f6f676c652e6461746173746f72652e76312e456e74697479526573756c7412120a0a656e645f637572736f7218042001280c124b0a0c6d6f72655f726573756c747318052001280e32352e676f6f676c652e6461746173746f72652e76312e5175657279526573756c7442617463682e4d6f7265526573756c74735479706512180a10736e617073686f745f76657273696f6e1807200128032298010a0f4d6f7265526573756c74735479706512210a1d4d4f52455f524553554c54535f545950455f554e535045434946494544100012100a0c4e4f545f46494e49534845441001121c0a184d4f52455f524553554c54535f41465445525f4c494d49541002121d0a194d4f52455f524553554c54535f41465445525f435552534f52100412130a0f4e4f5f4d4f52455f524553554c54531003429d010a17636f6d2e676f6f676c652e6461746173746f72652e7631420a517565727950726f746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6461746173746f72652f76313b6461746173746f7265aa0219476f6f676c652e436c6f75642e4461746173746f72652e5631ca0219476f6f676c655c436c6f75645c4461746173746f72655c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

