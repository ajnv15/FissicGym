Public Class Dar_de_baja
    Private Sub Dar_de_baja_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim dt As New DataTable
        Dim rs As New mys
        Dim dia As String = Date.Now.Day
        Dim mes As String = Date.Now.Month
        Dim anio As String = Date.Now.Year
        anio = anio.Replace("20", "")

        Dim query As String = "select nombre as Nombre, numero as Numero, concat(mes,'/', dia, '/',anio) as Vencimiento from socios where `dia` < " + dia + " and " _
         & " `mes` < " + mes + " and `anio` <=" + anio + " and `estatus` != 'baja' order by anio desc"
        ' MsgBox(query)

        dt = rs.datos(query)

        DataGridView1.AutoSizeColumnsMode = DataGridViewAutoSizeColumnMode.Fill
        DataGridView1.DataSource = dt

    End Sub


    Private Sub DataGridView1_CellContentClick(sender As Object, e As DataGridViewCellEventArgs) Handles DataGridView1.CellContentClick
        If e.ColumnIndex <> 0 Then
            Exit Sub

        End If

        Dim va As String = DataGridView1.Rows(e.RowIndex).Cells(2).Value
        MsgBox(va)
    End Sub
End Class



