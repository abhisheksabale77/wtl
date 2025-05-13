<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="html" indent="yes"/>
  <xsl:template match="/library">
    <html>
      <head>
        <title>Library Book List</title>
        <style>
          table {border-collapse: collapse; width: 100%;}
          th, td {border: 1px solid black; padding: 8px; text-align: left;}
          th {background-color: #f2f2f2;}
        </style>
      </head>
      <body>
        <h2>Library Book List</h2>
        <table>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Price</th>
            <th>Year</th>
            <th>Publisher</th>
          </tr>
          <xsl:apply-templates select="book"/>
        </table>
      </body>
    </html>
  </xsl:template>
  <xsl:template match="book">
    <tr>
      <td><xsl:value-of select="title"/></td>
      <td><xsl:value-of select="author"/></td>
      <td><xsl:value-of select="genre"/></td>
      <td><xsl:value-of select="price"/></td>
      <td><xsl:value-of select="year"/></td>
      <td><xsl:value-of select="publisher"/></td>
    </tr>
  </xsl:template>
</xsl:stylesheet>
