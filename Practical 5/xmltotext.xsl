<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/students">
        <xsl:for-each select="student">
            <xsl:value-of select="name" />
            <xsl:text> | </xsl:text>
            <xsl:value-of select="age" />
            <xsl:text> | </xsl:text>
            <xsl:value-of select="course" />
            <xsl:text>&#10;</xsl:text>
        </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>
