<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <!-- Template to match the root element (students) -->
    <xsl:template match="/students">
        <html>
            <head>
                <title>Student List</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f9;
                        margin: 0;
                        padding: 0;
                    }
                    h1 {
                        background-color: #333;
                        color: white;
                        text-align: center;
                        padding: 20px;
                    }
                    ul {
                        padding: 20px;
                    }
                    li {
                        background-color: #fff;
                        margin: 5px 0;
                        padding: 10px;
                        border: 1px solid #ddd;
                    }
                </style>
            </head>
            <body>
                <h1>List of Students</h1>
                <ul>
                    <!-- Loop through each student element and display the name -->
                    <xsl:for-each select="student">
                        <li>
                            <xsl:value-of select="name"/>
                        </li>
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
