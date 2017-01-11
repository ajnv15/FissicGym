Public Class nuevaCuota
    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles TextBox1.TextChanged

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim descripcion As String = TextBox1.Text
        Dim monto As String = TextBox2.Text
        Dim meses As String = ComboBox1.Text
        If Not String.IsNullOrEmpty(descripcion) And Not String.IsNullOrEmpty(monto) And Not String.IsNullOrEmpty(meses) Then
            Dim query As String = "insert into `couta` (`cuota`, `monto`,`meses`) values ('" + descripcion + "','" + monto + "','" + "" + meses + "');"
            Dim insert As New mys()
            insert.insertar(query)
            MsgBox("Se ha insertado correctamente esta cuota")
        End If
    End Sub




    Private Sub TextBox2_keypressed(sender As Object, e As KeyPressEventArgs) Handles TextBox2.KeyPress


        If Asc(e.KeyChar) <> 8 Then
            If Asc(e.KeyChar) < 48 Or Asc(e.KeyChar) > 57 Then
                e.Handled = True
            End If
        End If
    End Sub

    Private Sub nuevaCuota_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub
End Class