<div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" onclick='clearRatings()' class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h4 class="modal-title">Rate Us!</h4>
      </div>
      <div class="modal-body" align='center'>
        <form>
          <table class="table table-bordered table-striped table-hover" style='width:75%;'>
            <tr>
              <th style='width=34%'></th>
              <th style='width=33%' align="center">Stars</th>
              <th style='width=33%' align="center">Ratings</th>
            </tr>
            <!--1 Star -->
            <tr>
              <td>
                <a class='btn btn-warning btn-sm'>
                  <span class='glyphicon glyphicon-star'></span>
                </a>
              </td>
              <td align="center" >1</td>
              <td align="center"><input type="radio" id="1" name="ratings" value="1"></td>
            </tr>
            <!-- 2 Stars -->
            <tr>
              <td>
                <a class='btn btn-warning btn-sm'>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                </a>
              </td>
              <td align="center" >2</td>
              <td align="center"><input type="radio" id="2" name="ratings" value="2"></td>
            </tr>
            <!-- 3 Stars -->
            <tr>
              <td>
                <a class='btn btn-warning btn-sm'>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                </a>
              </td>
              <td align="center" >3</td>
              <td align="center"><input type="radio" id="3" name="ratings" value="3"></td>
            </tr>
            <!-- 4 Stars -->
            <tr>
              <td>
                <a class='btn btn-warning btn-sm'>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                </a>
              </td>
              <td align="center" >4</td>
              <td align="center"><input type="radio" id="4" name="ratings" value="4"></td>
            </tr>
            <!-- 5 Stars -->
            <tr>
              <td>
                <a class='btn btn-warning btn-sm'>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                  <span class='glyphicon glyphicon-star'></span>
                </a>
              </td>
              <td align="center" >5</td>
              <td align="center"><input type="radio" id="5" name="ratings" value="5"></td>
            </tr>

          </table>
          <table class=" table table-bordered table-striped table-hover">
            <tr>
              <p>Feedback</p>
              <div><textarea name="feedback" id= "feedback" placeholder='You can give us feedback here!' class="form-control" rows="4"></textarea></div>
            </tr>
          </table>
          <input type="button" class='btn btn-info' value='Submit Ratings' onclick='validateRatings()'>
          <input type="reset" class='btn btn-default' value='Clear' onclick='hideAlert("ratingErrorDiv")'> 
        </form>
        <div id='ratingErrorDiv' style='display:none;' align="left">
          <div class="alert alert-danger">
            <strong>Oops!</strong> <p id='ratingErrorMessage'>Please Rate!</p>
          </div> 
        </div>
        <div id='ratingSuccessDiv' style='display:none;' align="left">
          <div class='alert alert-success'>
            <strong>Success!</strong> Your ratings and feedback are noted
          </div>
        </div>
      </div>
    </div>
  </div>
</div>