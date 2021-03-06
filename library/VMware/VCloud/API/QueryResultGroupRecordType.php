<?php
class VMware_VCloud_API_QueryResultGroupRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $isReadOnly = null;
    protected $roleName = null;
    protected $name = null;
    protected $identityProviderType = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param boolean $isReadOnly - [optional] an attribute, 
    * @param string $roleName - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $identityProviderType - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $isReadOnly=null, $roleName=null, $name=null, $identityProviderType=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->isReadOnly = $isReadOnly;
        $this->roleName = $roleName;
        $this->name = $name;
        $this->identityProviderType = $identityProviderType;
        $this->tagName = 'GroupRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_isReadOnly(){
        return $this->isReadOnly;
    }
    public function set_isReadOnly($isReadOnly) {
        $this->isReadOnly = $isReadOnly;
    }
    public function get_roleName(){
        return $this->roleName;
    }
    public function set_roleName($roleName) {
        $this->roleName = $roleName;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_identityProviderType(){
        return $this->identityProviderType;
    }
    public function set_identityProviderType($identityProviderType) {
        $this->identityProviderType = $identityProviderType;
    }
    public function get_tagName() { return $this->tagName; }
    public function set_tagName($tagName) { $this->tagName = $tagName; }
    public function export($name=null, $out='', $level=0, $namespacedef=null, $namespace=null, $rootNS=null) {
        if (!isset($name)) {
            $name = $this->tagName;
        }
        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
        if (is_null($namespace)) {
            $namespace = self::$defaultNS;
        }
        if (is_null($rootNS)) {
            $rootNS = self::$defaultNS;
        }
        if (NULL === $namespacedef) {
            $namespacedef = $this->namespacedef;
            if (0 >= strpos($namespacedef, 'xmlns=')) {
                $namespacedef = ' xmlns="' . self::$defaultNS . '"' . $namespacedef;
            }
        }
        $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, $name, self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, '<' . $ns . $name . $namespacedef);
        $out = $this->exportAttributes($out, $level, $name, $namespacedef, $namespace, $rootNS);
        if ($this->hasContent()) {
            $out = VMware_VCloud_API_Helper::addString($out, ">\n");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportAttributes($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->isReadOnly)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isReadOnly', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isReadOnly=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isReadOnly, $input_name='isReadOnly')));
        }
        if (!is_null($this->roleName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'roleName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'roleName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->roleName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='roleName')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->identityProviderType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'identityProviderType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'identityProviderType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->identityProviderType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='identityProviderType')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
            parent::hasContent()
            ) {
            return true;
        } else {
            return false;
        }
    }
    public function build($node, $namespaces='') {
        $tagName = $node->tagName;
        $this->tagName = $tagName;
        if (strpos($tagName, ':') > 0) {
            list($namespace, $tagName) = explode(':', $tagName);
            $this->tagName = $tagName;
            $this->namespace[$tagName] = $namespace;
        }
        $this->buildAttributes($node, $namespaces);
        $children = $node->childNodes;
        foreach ($children as $child) {
            if ($child->nodeType == XML_ELEMENT_NODE || $child->nodeType == XML_TEXT_NODE) {
                $namespace = '';
                $nodeName = $child->nodeName;
                if (strpos($nodeName, ':') > 0) {
                    list($namespace, $nodeName) = explode(':', $nodeName);
                }
                $this->buildChildren($child, $nodeName, $namespace);
            }
        }
    }
    protected function buildAttributes($node, $namespaces='') {
        $attrs = $node->attributes;
        if (!empty($namespaces)) {
            $this->namespacedef = VMware_VCloud_API_Helper::constructNS($attrs, $namespaces, $this->namespacedef) . $this->namespacedef;
        }
        $nsUri = self::$defaultNS;
        $ndisReadOnly = $attrs->getNamedItem('isReadOnly');
        if (!is_null($ndisReadOnly)) {
            $this->isReadOnly = VMware_VCloud_API_Helper::get_boolean($ndisReadOnly->value);
            if (isset($ndisReadOnly->prefix)) {
                $this->namespace['isReadOnly'] = $ndisReadOnly->prefix;
                $nsUri = $ndisReadOnly->lookupNamespaceURI($ndisReadOnly->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isReadOnly');
        } else {
            $this->isReadOnly = null;
        }
        $ndroleName = $attrs->getNamedItem('roleName');
        if (!is_null($ndroleName)) {
            $this->roleName = $ndroleName->value;
            if (isset($ndroleName->prefix)) {
                $this->namespace['roleName'] = $ndroleName->prefix;
                $nsUri = $ndroleName->lookupNamespaceURI($ndroleName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'roleName');
        } else {
            $this->roleName = null;
        }
        $ndname = $attrs->getNamedItem('name');
        if (!is_null($ndname)) {
            $this->name = $ndname->value;
            if (isset($ndname->prefix)) {
                $this->namespace['name'] = $ndname->prefix;
                $nsUri = $ndname->lookupNamespaceURI($ndname->prefix);
            }
            $node->removeAttributeNS($nsUri, 'name');
        } else {
            $this->name = null;
        }
        $ndidentityProviderType = $attrs->getNamedItem('identityProviderType');
        if (!is_null($ndidentityProviderType)) {
            $this->identityProviderType = $ndidentityProviderType->value;
            if (isset($ndidentityProviderType->prefix)) {
                $this->namespace['identityProviderType'] = $ndidentityProviderType->prefix;
                $nsUri = $ndidentityProviderType->lookupNamespaceURI($ndidentityProviderType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'identityProviderType');
        } else {
            $this->identityProviderType = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}