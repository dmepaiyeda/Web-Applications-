<?xml version='1.0' encoding='UTF-8' ?>
<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
      <xsl:output version='1.0' encoding='UTF-8' indent='no' method='xml' />

      <xsl:template match='/'>
  <FMPXMLRESULT xmlns="http://www.filemaker.com/fmpxmlresult">
  <ERRORCODE>Error!</ERRORCODE>
  <PRODUCT BUILD="11/13/2002" NAME="FileMaker Pro" VERSION="6.0v4"/>
  <DATABASE DATEFORMAT="M/d/yyyy" LAYOUT="" NAME="artists.FP5" RECORDS="" />
  <METADATA>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="ArtistID" TYPE="NUMBER"/>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Firstname" TYPE="TEXT"/>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Lastname" TYPE="TEXT"/>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Birth" TYPE="TEXT"/>
                           <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Death" TYPE="TEXT"/>
                            <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Pol" TYPE="TEXT"/>
  </METADATA>
  <RESULTSET FOUND="">
        <xsl:for-each select="./artists/artist ">
              <ROW bgcolor="#ffff00" MODID="" RECORDID="">
                      <COL><DATA><xsl:value-of select="@ID " /></DATA></COL>
                      <COL> <DATA> </DATA></COL>
                      <COL> <DATA> </DATA></COL>
                      <COL><DATA><xsl:value-of select="./firstname "/></DATA></COL>
                      <COL><DATA><xsl:value-of select="./lastname " /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./birth " /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./death " /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./pol " /></DATA></COL>
              </ROW>
        </xsl:for-each>
 </RESULTSET>
 </FMPXMLRESULT>
      </xsl:template>

</xsl:stylesheet>
