Public Class Modificar_cuota
    Private Sub Modificar_cuota_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim query As String = "select cuota from couta "
        Dim rs As New mys
        Dim dt As New DataSet
        dt = rs.paraTabla(query)
        ComboBox1.DataSource = dt.Tables(0)
        ComboBox1.DisplayMember = "cuota"
    End Sub


    Private Sub ComboBox1_SelectedIndexChanged(sender As Object, e As EventArgs) Handles ComboBox1.SelectedValueChanged
        MsgBox(ComboBox1.SelectedItem.ToString)

        Dim query As String = "select monto, meses from couta where couta = " + ComboBox1.SelectedItem.ToString




    End Sub
End Class