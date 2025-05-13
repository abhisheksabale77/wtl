<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" indent="yes"/>
  
  <xsl:template match="/library">
    <catalog>
      <xsl:apply-templates select="book"/>
    </catalog>
  </xsl:template>
  
  <xsl:template match="book">
    <item>
      <title><xsl:value-of select="title"/></title>
      <author><xsl:value-of select="author"/></author>
      <price><xsl:value-of select="price"/></price>
    </item>
  </xsl:template>
  
</xsl:stylesheet>
